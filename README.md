# Client LP Work
## Design Guidelines
### 基本仕様
- 使用フォント
- 使用カラー
- 画像のファイル命名規則
- UIコンポーネント

### 使用フォント
ロゴ
- Akrobat Bold

基本フォント
- 游ゴシック(Medium/Bold)

### 使用カラー
- メインカラー ` #1aa1e6 `
- 見出し、本文 ` #393939 `
- 見出し下のテキスト ` #7b7b7b `

### 画像のファイル命名規則

サンプル
```
(接頭辞)-(名前)__(番号/ステート/色).拡張子
```
- 命名規則はFLOCSSに倣う
- 半角英数字を使用
- 番号は0埋めしない

---
## Coding Guidelines

### 基本仕様
- HTML5
- SCSS(CSS3/CSS2.1)
- Javascript
- PHP

---
### ディレクトリ構成

```
root
├── src/
│   ├── images/
│   │   └── svg/
│   ├── scss/
│   │   ├── foundation/
│   │   │   └── mixin/
│   │   ├── layout/
│   │   └── object/
│   │       ├── component/
│   │       ├── project/
│   │       └── utility/
│   ├── css/
│   ├── js/
│   └── index.html
├──  gulpfile.js
├──  package.json
└── .gitignore
```
- node_modulesはGitの監視に含めない

### HTML

- 文字コードはUTF-8（BOMなし）
- 英数字は半角
- インデントタブ1つ
- サイト内のリンクは相対アドレスを使用
- ページ内リンクはID属性を使用
- 外部リンクは target="_blank" を指定
- alt属性は対応言語に合わせて、「なにであるか」を明確な文言を使用
- 終了タグの後にコメントを挿入（ID：「/#」Class；「/.」を使用して閉じタグの役割を明確にする）
- 文法チェック: [W3C Markup Validation Service](http://validator.w3.org/)

### SCSS(CSS3/CSS2.1)
- [FLOCSS](https://github.com/hiloki/flocss)を使用
  -  命名ルール：MindBEMding
- マルチクラスではなくシングルクラスになるように、SCSSのmixinとextendを使用
  - mixinは原則として引数を使用し、スタイルの差分を想定されるもののみに使用
    - mixinは色やサイズが変わるパーツに使用
  - extendは丸角や影に使用
- ページ内リンクとして機能させる用途以外にIDを使用禁止
- style.cssとして1ファイルにまとめる
  -  HTML内で使用するのはミニファイしたファイルを使用
- プロパティの書き順は、Mozillaに倣い以下の通り
- 方向を伴う指定は2つ以上の指定する場合、ショートハンドを使用
- 小数点以下の値を使用するときは、 ` 0 ` を省略
- line-heightは単位なしで指定する

#### CSSプロパティ順
```
/* Suggested order:
 * display
 * list-style
 * position
 * float
 * clear
 * width
 * height
 * margin
 * padding
 * border
 * background
 * color
 * font
 * text-decoration
 * text-align
 * vertical-align
 * white-space
 * other text
 * content
 *
 */
 ```
 
 ##### 視覚整形モデル
- display
- visibility
- opacity
- clip ※Deprecated
- clip-path
- list-style
  - list-style-type
  - list-style-position
  - list-style-image
- position
  - top
  - right
  - bottom
  - left
- z-index
- float
- clear
- transform

##### ボックスモデル
- width
- min-width
- max-width
- height
- min-height
- max-height
- margin
  - margin-top
  - margin-right
  - margin-bottom
  - margin-left
- padding
  - padding-top
  - padding-right
  - padding-bottom
  - padding-left
- overflow
  - overflow-x
  - overflow-y
- border
  - border-width
    - border-top-width
    - border-right-width
    - border-bottom-width
    - border-left-width
  - border-style
    - border-top-style
    - border-right-style
    - border-bottom-style
    - border-left-style
  - border-color
    - border-top-color
    - border-right-color
    - border-bottom-color
    - border-left-color
  - border-image
    - border-image-source
    - border-image-slice
    - border-image-width
    - border-image-outset
    - border-image-repeat
  - border-radius
    - border-top-left-radius
    - border-top-right-radius
    - border-bottom-right-radius
    - border-bottom-left-radius
- box-sizing
- box-shadow

##### 背景
- background
  - background-image
  - background-position
  - background-size
  - background-repeat
  - background-origin
  - background-clip
  - background-attachement
  - background-color
  
##### フォントとカラー
- color
- font
  - font-family
  - font-style
  - font-variant
  - font-weight
  - font-stretch
  - font-size
- line-height
- letter-spacing
- text-decoration
  - text-decoration-style
  - text-decoration-color
  - text-decoration-line
- text-align
- text-indent
- text-transform
- white-space
- word-break
- word-spaciing
- word-wrap
- text-shadow

##### テーブル
- table-layout
- border-collapse
- border-spacing
- empty-cells
- caption-side
- vertical-align

##### Flexbox
- flex
  - flex-grow
  - flex-shrink
  - flex-basis
- flex-flow
  - flex-direction
  - flex-wrap
- justify-content
- align-content
- align-items
- align-self
- order

##### 生成内容・ユーザーインターフェース
- content
- quotes
- counter-increment
- counter-reset
- outline
  - outline-width
  - outline-style
  - outline-color
- cursor
- resize

##### アニメーション
- transition
  - transition-property
  - transition-duration
  - transition-timing-function
  - transition-delay
- animation
  - animation-name
  - animation-duration
  - animation-timing-function
  - animation-delay
  - animation-iteration-count
  - animation-direction
  - animation-fill-mode
  - animation-play-state
  
##### その他
- unicode-bidi
- direction
- page-break-before
- page-break-after
- page-break-inside
- widows
- orphans

### JavaScript

### PHP
