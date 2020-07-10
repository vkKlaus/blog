<?php
require $_SERVER['DOCUMENT_ROOT'] . '/module/connect.php';

require $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/index.php';
require $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php';
?>


  <link type="application/atom+xml" rel="alternate" href="feed.xml" />


  <link rel="stylesheet" href="katex.min.css" />
  <link rel="stylesheet" href="monokai-sublime.min.css" />
  <link rel="stylesheet" href="quill.snow.css" />



  <div id="standalone-container">
    <div id="toolbar-container">
      <span class="ql-formats  text-white">
        <select class="ql-font"></select>
        <select class="ql-size"></select>
      </span>
      <span class="ql-formats">
        <button class="ql-bold"></button>
        <button class="ql-italic"></button>
        <button class="ql-underline"></button>
        <button class="ql-strike"></button>
      </span>
      <span class="ql-formats">
        <select class="ql-color"></select>
        <select class="ql-background"></select>
      </span>
      <span class="ql-formats">
        <button class="ql-script" value="sub"></button>
        <button class="ql-script" value="super"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-header" value="1"></button>
        <button class="ql-header" value="2"></button>
        <button class="ql-blockquote"></button>
        <button class="ql-code-block"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-list" value="ordered"></button>
        <button class="ql-list" value="bullet"></button>
        <button class="ql-indent" value="-1"></button>
        <button class="ql-indent" value="+1"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-direction" value="rtl"></button>
        <select class="ql-align"></select>
      </span>
      <span class="ql-formats">
        <button class="ql-link" type="button"><svg viewBox="0 0 18 18">
            <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
            <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path>
            <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path>
          </svg></button>
        <button class="ql-image" type="button"><svg viewBox="0 0 18 18">
            <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
            <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
            <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
          </svg></button>
      </span>

    </div>
    <div id="editor-container"></div>
  </div>



  <script src="katex.min.js"></script>

  <script src="highlight.min.js"></script>

  <script src="quill.min.js"></script>

  <script>
    var quill = new Quill('#editor-container', {
      modules: {
        formula: true,
        syntax: true,
        toolbar: '#toolbar-container'

      },
      placeholder: 'Compose an epic...',
      theme: 'snow'
    });
  </script>


