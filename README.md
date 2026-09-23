# Hida Works

飛騨地域の架空の建築会社をテーマに制作した、
WordPressオリジナルテーマのポートフォリオサイトです。

## Demo

https://hida-works.illust-yt.com/

## 使用技術

- HTML
- CSS
- JavaScript
- PHP
- WordPress
- Advanced Custom Fields
- Contact Form 7
- Swiper
- Git / GitHub

## 実装内容

- WordPressオリジナルテーマの作成
- レスポンシブ対応
- `<picture>` 要素を使ったPC・スマートフォン画像の切り替え
- WebP、SVGの使用
- カスタム投稿タイプ「施工事例」の作成
- カスタムタクソノミーによる施工事例の分類
- ACFを使った施工事例の入力・表示
- 施工事例の一覧・詳細ページ
- WordPress標準投稿を使ったNews機能
- WP_Queryによる施工事例・Newsの表示
- JavaScriptによる施工事例の画像切り替え
- IntersectionObserverを使ったスクロールアニメーション
- Swiperによるメインビジュアルのスライダー
- Contact Form 7によるお問い合わせフォーム
- SMTPを使った管理者通知・自動返信メール
- Localで制作し、レンタルサーバーへ公開

## 制作で意識したこと

施工事例は、WordPressの管理画面から追加・編集できるようにしました。

実務で既存サイトの修正をしていると、
CSSのネストが深く、どこまで影響するのか分かりにくいコードに苦労することがあります。

その経験から、このサイトではBEMを意識してクラスを付け、
できるだけ後から修正しやすいCSSにしました。
共通で使うパーツやCSSもまとめています。

画像は、PCとスマートフォンで表示する画像を変えたい箇所に
`<picture>` 要素を使用しています。
写真はWebP、ロゴやアイコンはSVGを使用しました。

## デザイン・素材について

架空の企業サイトです。
デザインカンプと一部の画像素材には生成AIを使用しています。

コーディングからWordPressテーマへの組み込み、
カスタム投稿やACFの設定、本番環境への公開まで行いました。

## 制作環境

- Local
- Cursor
- Git / GitHub
- WordPress