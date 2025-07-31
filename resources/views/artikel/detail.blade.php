<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sidebar Tagar & Kategori</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        font-size: 14px;
        background-color: 
#f7f7f7;
        margin: 0;
        padding: 20px;
      }
      .sidebar {
        width: 260px;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
      }
      .hashtags,
      .kategori {
        display: grid;
        grid-template-columns: repeat(2, max-content);
        gap: 10px 12px;
        margin-bottom: 20px;
      }
      .hashtag,
      .kategori-item {
        background: 
#b388ff;
        color: white;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 13px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
        white-space: nowrap;
      }
      .divider {
        border-top: 1px solid #888;
        margin: 20px 0;
      }
      .kategori-title {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 12px;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <div class="hashtags">
        <div class="hashtag">#hashtag1</div>
        <div class="hashtag">#hashtag1</div>
        <div class="hashtag">#hashtag1</div>
        <div class="hashtag">#hashtag1</div>
        <div class="hashtag">#hashtag1</div>
        <div class="hashtag">#hashtag1</div>
      </div>
      <div class="divider"></div>
      <div class="kategori-title">Kategori</div>
      <div class="kategori">
        <div class="kategori-item">Kategori 1</div>
        <div class="kategori-item">Kategori 2</div>
        <div class="kategori-item">Kategori 3</div>
        <div class="kategori-item">Kategori 4</div>
        <div class="kategori-item">Kategori 5</div>
        <div class="kategori-item">Kategori 6</div>
        <div class="kategori-item">Kategori 7</div>
        <div class="kategori-item">Kategori 8</div>
        <div class="kategori-item">Kategori 9</div>
      </div>
    </div>
  </body>
</html>