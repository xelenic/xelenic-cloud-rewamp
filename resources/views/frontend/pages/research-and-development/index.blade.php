@extends('frontend.layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .content {
      max-width: 800px;
      margin: 20px auto;
      padding: 0 20px;
    }

    h1, h2 {
      color: #333;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }
  </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research and Development</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Research and Development</h1>
  </header>

  <section class="content">
   
    <h2>Current Projects</h2>
    <ul>
      <li>Project 1</li>
      <li>Project 2</li>
      <li>Project 3</li>
    </ul>

    <h2>Contributors</h2>
    <ul>
      <li>Contributor 1</li>
      <li>Contributor 2</li>
      <li>Contributor 3</li>
    </ul>

    <h2>Partnerships</h2>
    <ul>
      <li>Partner 1</li>
      <li>Partner 2</li>
      <li>Partner 3</li>
    </ul>
  </section>
  @section('content')
    
@endsection

</body>
</html>



