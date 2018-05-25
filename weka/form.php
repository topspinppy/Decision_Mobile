<!DOCTYPE html>
<html>
  <head>
  <style>@import url('https://fonts.googleapis.com/css?family=Roboto');</style>
    <style>
      #mainFrom input[type=number]{
        width : 50%;
        padding : 1% 0% 3% 3%;
        font-family: 'Roboto', sans-serif;
        font-size: 25px;
      }
      .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
      .button1 {
      background-color: white;
      color: black;
      border: 2px solid #4CAF50;
  }
  .button1:hover {
    background-color: #4CAF50;
        color: white;
}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="full2.php" method="post" id="mainFrom">
      <input  type="number" name="num1" value="" width="50px"><br>
      <input type="number" name="num2" value=""><br>
      <input type="number" name="num3" value=""><br>
      <input  type="number" name="num4" value=""><br>
      <input class="button button1" type="submit" value="ไปเลย">
    </form>
  </body>
</html>
