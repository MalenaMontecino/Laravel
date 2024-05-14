@extends('layouts.principal')
@section('titulo','Cursos')

@section('contenido')
<table class="table table-bordered mt-3">
    <tr>
        <th>Id</th>
        <th>Sigles</th>
        <th>Nom</th>
        <th>Sigles cicle</th>
        
       
    </tr>
    <?php foreach ($Cursos as $Curs) { ?>
        <tr>
            <td>
                <?php echo $Curs->getId(); ?>
            </td>
            <td>
                <?php echo  $Curs->getSigles();?>
            </td>
            <td>
                <?php echo $Curs->getNom(); ?>
            </td>
            <td>
                <?php echo $Curs->getSiglesCicle(); ?>
            </td>
         
      
        </tr>

    <?php } ?>

</table>


@endsection