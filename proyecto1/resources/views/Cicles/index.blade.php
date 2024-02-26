@extends('layouts.principal')
@section('titulo','Índice')

@section('contenido')
<table class="table table-bordered mt-3">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Sigles</th>
       
    </tr>
    <?php foreach ($Cicles as $Cicle) { ?>
        <tr>
            <td>
                <?php echo $Cicle->getId(); ?>
            </td>
            <td>
                <?php echo $Cicle->getNom(); ?>
            </td>
            <td>
                <?php echo  $Cicle->getSigles();?>
            </td>
      
        </tr>

    <?php } ?>

</table>


@endsection