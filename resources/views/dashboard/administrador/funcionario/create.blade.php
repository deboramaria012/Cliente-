
@extends('layoutdash.layout')

@section('conteudo-dash')

<style>


.painel-content {
    margin: 20px;
}

.filter-items {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-wrp {
    margin-bottom: 20px;
}

.row {
    margin-bottom: 10px;
}

.brd-rd5 {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.invalid-feedback {
    display: block;
    color: rgb(100, 127, 158);
    margin-top: 5px;
}

/* Estilos adicionais conforme necessário */

</style>

<!-- painel de opções -->

<!-- topo da página -->
</style>

     <h1>Cadastro De Funcionario</h1>

<<div class="painel-content">
    <div class="filter-items">
        <div class="row grid wrap mrg20">
            <form class="form-wrp" action="{{ route('admin.funcionario.create') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('nomefuncionario') is-invalid @enderror" type="text" id="nomefuncionario" name="nomeAlunoo" value="{{ old('nomefuncionario') }}" required placeholder="Nome do funcionario">
                        @error('nomefuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('emailfuncionario') is-invalid @enderror" type="email" id="emailfuncionario" name="emailfuncionario" value="{{ old('emailfuncionario') }}" required placeholder="E-mail do funcionarip">
                        @error('emailfuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('dataNascFuncionario') is-invalid @enderror" type="text" id="dataNascfuncionario" name="dataNascfuncionario" value="{{ old('dataNascfuncionario') }}" required placeholder="Data de Nascimento do funcionario">
                        @error('dataNascFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('telefonefuncionario') is-invalid @enderror" type="text" id="telefonefuncionario" name="foneAluno" value="{{ old('telefonefuncionario') }}" required placeholder="Telefone do funcionario">
                        @error('telefoneFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('enderecofuncionario') is-invalid @enderror" type="text" id="enderecofuncionario" name="enderecofuncionario" value="{{ old('enderecofuncionario') }}" required placeholder="Endereço do funcionario">
                        @error('enderecoFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('cidadefuncionario') is-invalid @enderror" type="text" id="cidadefuncionario" name="cidadefuncionario" value="{{ old('cidadefuncionario') }}" required placeholder="Cidade do funcionario">
                        @error('cidadefuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('estadofuncionario') is-invalid @enderror" type="text" id="estadofuncionario" name="estadofuncionario" value="{{ old('estadofuncionario') }}" required placeholder="Estado do funcionario">
                        @error('estadofuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('cepfuncionario') is-invalid @enderror" type="text" id="cepfuncionario" name="cepfuncionario" value="{{ old('cepfuncionario') }}" required placeholder="CEP do funcionario">
                        @error('cepfuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('dataContratoFuncionario') is-invalid @enderror" type="text" id="dataContratoFuncionario" name="dataContratoFuncionario" value="{{ old('dataContratoFuncionario') }}" required placeholder="Data de Contrato do funcionario">
                        @error('dataContratoFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('cargoFuncionario') is-invalid @enderror" type="text" id="cargoFuncionario" name="cargoFuncionario" value="{{ old('cargoFuncionario') }}" required placeholder="Cargo Funcionario">
                        @error('cargoFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('salariofuncionario') is-invalid @enderror" type="text" id="salariofuncionario" name="salariofuncionario" value="{{ old('salariofuncionario') }}" required placeholder="salario do funcionario">
                        @error('salariofuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                <div class="row mrg-20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('tipofuncionario') is-invalid @enderror" type="text" id="tipofuncionario" name="pla" value="{{ old('tipofuncionario') }}" required placeholder="tipo do funcionario">
                        @error('tipofuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd5 @error('statusfuncionario') is-invalid @enderror" type="text" id="statusfuncionario" name="statusfuncionario" value="{{ old('statusfuncionario') }}" required placeholder="Status do funcionario">
                        @error('statusAlunoo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

              <div class="col-md-12 col-sm-12 col-lg-12">
            <button class="green-bg brd-rd5" type="submit">
              <i class="fa fa-paper-plane"></i>Cadastro do Funcionario</button>
         </div>

</form>




@endsection





