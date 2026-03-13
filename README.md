# WP Corporate DX

創業100年の老舗メーカーが最新技術で変革を遂げる ── **DXコーポレートサイト** のカスタム WordPress テーマ。  
堅牢性と情緒的なデザインの両立を証明するテーマです。

## 概要

「伝統と革新が、交差する瞬間に。次の100年を創る。」をキャッチコピーに掲げ、日本の伝統色と縦書きタイポグラフィを活かした和のエッセンスと、CSS Grid による非対称レイアウトやスムーズアニメーションといったモダンな技術を融合させたコーポレートサイトテーマです。

## 技術スタック

| カテゴリ   | 技術                                                                                 |
| ---------- | ------------------------------------------------------------------------------------ |
| CMS        | WordPress（カスタムテーマ）                                                          |
| PHP        | 名前空間 (`WPCorporate`) によるモジュール管理                                        |
| CSS 設計   | Sass（SCSS）/ FLOCSS ベース                                                          |
| フォント   | [Shippori Mincho](https://fonts.google.com/specimen/Shippori+Mincho)（Google Fonts） |
| レイアウト | 12カラム CSS Grid（非対称グリッド）                                                  |
| ライセンス | GPL v2 or later                                                                      |

## ディレクトリ構成

```
wp-corporate/
├── wp-content/
│   └── themes/
│       └── wp-corporate/          # テーマ本体
│           ├── assets/
│           │   ├── images/        # 画像アセット
│           │   │   └── hero-factory.jpg
│           │   └── scss/          # Sass ソースファイル
│           │       ├── foundation/
│           │       │   ├── _variables.scss   # デザイントークン（色・フォント・ブレークポイント）
│           │       │   └── _mixin.scss       # 縦書き・メディアクエリ・アニメーション Mixin
│           │       ├── layout/
│           │       │   └── _layout.scss      # リセット・グリッドシステム
│           │       └── style.scss            # メインエントリーポイント
│           ├── header.php         # ヘッダーテンプレート
│           ├── footer.php         # フッターテンプレート
│           ├── front-page.php     # フロントページテンプレート
│           ├── index.php          # フォールバックテンプレート
│           ├── functions.php      # テーマ機能（テーマサポート・CPT登録・アセット読み込み）
│           └── style.css          # テーマメタデータ
├── .gitignore
└── README.md
```

## 設計思想

### カラーパレット ── 日本の伝統色

| 変数名          | カラーコード | 和名                     | 用途                               |
| --------------- | ------------ | ------------------------ | ---------------------------------- |
| `$color-base`   | `#F2F2F2`    | 鳥の子色（Torinoko-iro） | 背景色。温かみのある和紙のような白 |
| `$color-text`   | `#2B2B2B`    | 墨色（Sumi-iro）         | テキスト色。深い墨のような黒       |
| `$color-accent` | `#8B0000`    | 深紅（Shinku）           | アクセント色。漆器のような深い紅   |

### タイポグラフィ

明朝体（Shippori Mincho）を採用し、日本語の美しさを最大限に活かしています。  
ヒーローセクションでは `writing-mode: vertical-rl`（縦書き）を使用し、伝統的な日本語表現を実現しています。

### レイアウトシステム

12カラムの CSS Grid をベースとした非対称グリッド（`.l-asymmetric-grid`）を採用。  
意図的な余白のずれによって、端正さの中に動きを生み出しています。

### アニメーション

`fadeInUp` アニメーションをベースとした `float-in` Mixin により、ページ読み込み時にコンテンツが浮かび上がるような演出を実装しています。

## カスタム投稿タイプ

### 製品紹介（Products）

- **スラッグ:** `products`
- **サポート機能:** タイトル / エディター / アイキャッチ画像 / 抜粋
- **ブロックエディター:** 対応（`show_in_rest: true`）
- **アーカイブページ:** 有効

フロントページには最新3件の製品が自動的に表示されます。

## セットアップ

### 前提条件

- WordPress 6.0 以上
- PHP 8.0 以上
- Sass コンパイラ（開発時）

### インストール手順

1. このリポジトリをクローンまたはダウンロードします。

   ```bash
   git clone https://github.com/your-username/wp-corporate.git
   ```

2. `wp-content/themes/wp-corporate` ディレクトリを WordPress の `wp-content/themes/` に配置します。

3. WordPress 管理画面 → **外観 → テーマ** から「WP Corporate DX」を有効化します。

4. **設定 → パーマリンク** を開き、「変更を保存」をクリックしてリライトルールを更新します（カスタム投稿タイプのURLを正しく機能させるために必要です）。

### Sass のコンパイル（開発時）

```bash
# assets/scss/style.scss をウォッチモードでコンパイル
sass --watch wp-content/themes/wp-corporate/assets/scss/style.scss:wp-content/themes/wp-corporate/style.css
```

> **注意:** `style.css` 冒頭のテーマメタデータコメントが上書きされないよう注意してください。

## ライセンス

[GNU General Public License v2 or later](http://www.gnu.org/licenses/gpl-2.0.html)
