<!-- Account History -->
@extends('layouts.main')

@section('content')

<!DOCTYPE html>
<html>
  <head>
    <title>Transaction History</title>
    <style>
      /* External CSS styling */
      table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
      }
      th, td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
      }
      th {
        background-color: #0077c2;
        color: #fff;
      }
      tr:hover {
        background-color: #f5f5f5;
      }
    </style>
    
  </head>
  <body>
    <header>
    <nav>
        <ul class="nav navbar justify-content-end">
            <li class="nav-item">
            <a class="nav-link" href="{{Route('home')}}"> Home </a>
            </li>
        </ul>
    </nav>
      <h1>Transaction History</h1>  
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th>Transaction ID</th>
            <th>Date</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>00001</td>
            <td>2023-03-31</td>
            <td>$50.00</td>
            <td>Train fare</td>
            <td>Completed</td>
          </tr>
          <tr>
            <td>00002</td>
            <td>2023-03-30</td>
            <td>$20.00</td>
            <td>Bus fare</td>
            <td>Completed</td>
          </tr>
          <tr>
            <td>00003</td>
            <td>2023-03-29</td>
            <td>$10.00</td>
            <td>Subway fare</td>
            <td>Failed</td>
          </tr>
        </tbody>
      </table>
    </main>
  </body>
</html>
@endsection