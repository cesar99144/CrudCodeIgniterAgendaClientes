<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="<?php echo base_url();?>/public/css/agenda.css" rel="stylesheet" type="text/css" />

        <!-- Icone -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
    
        <style>
            table{

                text-align: center;
            }

            #cabecalho{

                display: flex;
                justify-content: space-between;
            }

            #botao-adicionar{

                color: white;
            }
        </style>
    
    </head>
    <body>
    
    <div class="container mt-5">
        
        <div id="cabecalho">
            <div class="item">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Agenda</li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar clientes</li>
                    </ol>
                </nav>
            </div>
            
        </div>

        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Cnpj</label>
                <input type="text" class="form-control mt-2" name="cnpj" id="exampleFormControlInput1">
            </div>
            <div class="form-group mt-2">
                <label for="exampleFormControlInput1">Razão social</label>
                <input type="text" class="form-control mt-2" name="razao" id="exampleFormControlInput1">
            </div>
            <div class="form-group mt-2">
                <label for="exampleFormControlInput1">Fantasia</label>
                <input type="text" class="form-control mt-2" name="fantasia" id="exampleFormControlInput1">
            </div>
            <div class="form-group mt-2">
                <label for="exampleFormControlInput1">Cidade</label>
                <input type="text" class="form-control mt-2" name="cidade" id="exampleFormControlInput1">
            </div>
            <div class="form-group mt-2">
                <label for="exampleFormControlInput1">Estado</label>
                <input type="text" class="form-control mt-2" name="estado" id="exampleFormControlInput1">
            </div>
            <div class="form-group mt-2">
                <label for="exampleFormControlInput1">Celular</label>
                <input type="text" class="form-control mt-2" name="celular" id="exampleFormControlInput1">
            </div>
            <div class="form-group mt-2">
                <a href="<?php echo base_url();?>/agenda/listar" class="form-control btn btn-danger mt-2 w-25" id="exampleFormControlInput1">Cancelar</a>
                <input type="submit" class="form-control btn btn-primary mt-2 w-25" value="Cadastrar" id="exampleFormControlInput1">
            </div>
            
            </form>
        </div>
    </body>
</html>