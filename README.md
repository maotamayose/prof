以下の内容をREADME.mdに追加しました。CSSファイルのコードについても解説を加えています。

```markdown
# プロフィールページ

このプロジェクトは、ユーザーのプロフィールページを作成するためのHTMLとCSSの実装です。ページは、ヒーローセクションと動画＋テキストのブロックを含み、スマートフォンやPCで適切に表示されるレスポンシブデザインを採用しています。

## ディレクトリ構成

- `index.php`: ページのHTML構造
- `style.css`: ページのスタイルシート

## 機能

### ヒーローセクション
- **動画背景**: 画面全体を覆う背景動画を表示し、中央にテキストが重なります。
- **中央配置テキスト**: ユーザー名や簡単な紹介文を動画の中央に表示。

### 動画＋テキストブロック
- **趣味セクション**: 趣味に関するテキストと関連する動画を並べて表示。
- **性格セクション**: 性格に関するテキストと関連する動画を表示。

### レスポンシブデザイン
- **スマホ版対応**: スマホ表示では、動画以外の要素のサイズやレイアウトが調整され、ヒーローセクションのフォントサイズが小さくなり、他の動画は非表示になります。

## 使用技術

- **HTML5**: ページの基本構造を作成。
- **CSS3**: レイアウトやスタイリング、レスポンシブデザインを実装。
- **動画背景**: ヒーローセクションには背景動画を使用。

## レスポンシブ対応

### スマートフォン向け
- ヒーローセクションのフォントサイズを小さくし、テキストが見やすくなります。
- ヒーローセクション以外の動画は非表示にされます。
- コンテンツは縦並びに変更され、スマホでも見やすくなります。

### PC向け
- 通常通り、ヒーローセクションの背景動画とテキストが表示され、動画＋テキストブロックが横並びで表示されます。

## コードの説明

### `index.php`

- ページは`<html>`, `<head>`, `<body>`タグで構成されています。
- ヒーローセクションには、背景動画とテキストが中央に配置されます。
- 動画＋テキストブロックには、趣味や性格についてのテキストと関連する動画が配置されています。

### `style.css`

#### 基本スタイル
```css
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}
```
- **`font-family`**: ページ全体のフォントをArialに指定し、もしArialが利用できない場合はサンセリフ体（`sans-serif`）を使用します。
- **`margin: 0; padding: 0;`**: デフォルトの余白をリセットして、ページ全体のスペースを均等にします。
- **`background-color: #f8f8f8;`**: ページの背景色を薄いグレーに設定します。

#### ヒーローセクション
```css
.hero {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.hero-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    font-size: 2rem;
    background: rgba(0, 0, 0, 0.5);
    padding: 1rem;
    border-radius: 10px;
}
```
- **`.hero`**: ヒーローセクションの高さを`100vh`に設定し、画面全体を占めるようにしています。`overflow: hidden;`で内容がはみ出さないように制限しています。
- **`.hero-video`**: 背景動画の幅と高さを`100%`に設定し、`object-fit: cover;`で動画を画面全体にフィットさせます。
- **`.hero-text`**: テキストを動画の中央に配置するため、`position: absolute;`と`transform: translate(-50%, -50%);`を使って中央に配置しています。背景を半透明にしてテキストを目立たせています。

#### 動画＋テキストブロック
```css
.content-block {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 50px;
    background: white;
    gap: 80px;
}

.video-container {
    flex: 1;
    max-width: 500px;
    display: flex;
    justify-content: center;
}

.text-container {
    flex: 1;
    max-width: 450px;
    text-align: center;
}

.text-container ul li {
    width: 350px;
    background: #f0f0f0;
    padding: 12px;
    border-radius: 8px;
    text-align: left;
    font-weight: bold;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}
```
- **`.content-block`**: `display: flex;`を使い、動画とテキストを横並びに配置。`gap: 80px;`で要素間に80pxのスペースを追加しています。
- **`.video-container`**: 動画のコンテナを横並びで中央に配置するために`flex`を使用。
- **`.text-container`**: テキストのコンテナ。テキストの幅を制限し、中央揃えにしています。
- **`.text-container ul li`**: 趣味リストアイテムのデザイン。背景色、パディング、ボーダー半径、フォントの太さなどが設定されています。

#### レスポンシブ対応（スマホ向け）
```css
@media (max-width: 768px) {
    .content-block .video-container video {
        display: none;
    }

    .hero-text {
        font-size: 1.5rem;
        padding: 0.5rem;
    }

    .content-block {
        flex-direction: column;
        text-align: center;
    }

    .text-container {
        max-width: 90%;
    }

    .video-container {
        max-width: 100%;
    }

    .text-container ul li {
        width: 100%;
    }
}
```
- **`.content-block .video-container video { display: none; }`**: スマホ版では、ヒーローセクション以外の動画を非表示にします。
- **`.hero-text { font-size: 1.5rem; }`**: スマホ画面では、ヒーローセクションのテキストのフォントサイズを小さくして見やすくします。
- **`.content-block { flex-direction: column; }`**: スマホ版では、コンテンツを縦並びに変更します。
- **`.text-container ul li { width: 100%; }`**: スマホ版では、リストアイテムを100%幅にし、画面全体に収まるようにします。

## インストール方法

1. このリポジトリをクローンします。
2. `index.php`と`style.css`をローカルサーバーに配置し、ブラウザで確認します。

## ライセンス

このプロジェクトはMITライセンスのもとで提供されています。
```

このREADME.mdファイルには、CSSファイルのコードに関する詳細な解説も含まれています。これにより、プロジェクトの内容と構成、使用されている技術について理解しやすくなっています。