@extends('layouts.app')

@section('title', 'Página Inicial')

<!-- Sidebar -->
<div class="d-flex">
    <nav class="bg-black text-light vh-100 p-3" style="width: 250px;">
      <h4 class="text-danger">Martial Arts</h4>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Dashboard</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Alunos</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Instrutores</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Treinamentos</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Configurações</a>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow-1">

      <!-- Top Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Content Area -->
      <div class="container mt-4">
        <div class="row">
          <!-- Example Cards -->
          <div class="col-md-4">
            <div class="card bg-danger text-light">
              <div class="card-body">
                <h5 class="card-title">Total de Alunos</h5>
                <p class="card-text display-6">120</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-secondary text-light">
              <div class="card-body">
                <h5 class="card-title">Treinamentos</h5>
                <p class="card-text display-6">15</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-dark text-light border border-danger">
              <div class="card-body">
                <h5 class="card-title">Instrutores</h5>
                <p class="card-text display-6">8</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Example Table -->
        <div class="mt-4">
          <h3 class="text-danger">Atividades Recentes</h3>
          <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Atividade</th>
                <th>Data</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Treinamento de Karatê</td>
                <td>01/12/2024</td>
                <td><span class="badge bg-success">Concluído</span></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Aula de Jiu-Jitsu</td>
                <td>02/12/2024</td>
                <td><span class="badge bg-warning">Pendente</span></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Treino Funcional</td>
                <td>03/12/2024</td>
                <td><span class="badge bg-danger">Cancelado</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
@section('content')