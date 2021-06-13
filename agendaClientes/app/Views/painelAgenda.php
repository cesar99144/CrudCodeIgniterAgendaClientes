<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda clientes</title>

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
                        <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                    </ol>
                </nav>
            </div>
            <div class="item">
                <a id="botao-adicionar" href="<?php echo base_url();?>/agenda/adicionar" class="btn btn-primary">Adicionar cliente</a>
            </div>
        </div>
        <strong><?php echo $msg; ?></strong>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Razão social</th>
                <th scope="col">Fantasia</th>
                <th scope="col">Cnpj</th>
                <!--<th scope="col">Cidade</th>
                <th scope="col">Estado</th>-->
                <th scope="col">Celular</th>
                <th scope="col">Contato direto</th>
                <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientes as $dadosClientes): ?>
                <tr>
                  <th scope="row"><?php //echo $dadosClientes->id; ?></th>
                  <td><?php echo $dadosClientes->razao; ?></td>
                  <td><?php echo $dadosClientes->fantasia; ?></td>
                  <td><?php echo $dadosClientes->cnpj; ?></td>
                  <!--<td><?php //echo $dadosClientes->cidade; ?></td>-->
                  <!--<td><?php //echo $dadosClientes->estado; ?></td>-->
                  <td><?php echo $dadosClientes->celular; ?></td>
                  <td><a href="" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i>&nbsp; whatsapp</a></td>
                  <td>
                    <a href="<?php echo base_url();?>/agenda/excluir/<?php echo $dadosClientes->id; ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>&nbsp;</a>
                    <a href="<?php echo base_url();?>/agenda/editar/<?php echo $dadosClientes->id; ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i>&nbsp;</a>
                </td>
                </tr>
                <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </body>
</html>