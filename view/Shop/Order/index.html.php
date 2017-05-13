<h1>Listado de Ordenes</h1>
<table class="table">
    <tr>
        <th>Numero de Orden</th>
        <th>Estado</th>
        <th>Fecha de pedido</th>
        <th>Detalle</th>
        <?php if ($_SESSION['is_admin']): ?>
          <th>Modificar Estado</th>
        <?php endif ?>          
        
    </tr>
    
    <?php foreach($orders as $order):?>
        <tr>
            <td><?=$order['id']?></td>
            <td><?=$status[$order['status']]?></td>
            <td><?=$order['created_at']?></td>
            <td><a href="/shop/order/details?id=<?=$order['id']?>" class="btn btn-success">ver detalle</a></td>

            <?php if ($_SESSION['is_admin']): ?>
                 <td>
                     <select class="status_select form-control" data-order-id="<?= $order['id'] ?>">
                        <option selected  value="0"> Elija Nuevo Estado</option>
                         <option  value="1"> PENDIENTE</option>
                         <option value="2"> EN PROCESO</option>
                         <option value="3"> DESPACHADO</option>
                         <option value="4"> ENTREGADO</option>
                         <option value="5"> DEVOLUCION</option>
                         <option value="6"> ANULADO </option>
                     </select>
                 </td>
            <?php endif ?>               
        </tr>
    <?php endforeach?>
</table>

<script type="text/javascript">
  
  $(".status_select").on("change", function(){
    var option = $(this)
    var status = option.val() 
    var order_id = option.data("order-id")

    $.ajax({
      url: "/admin/order/updateOrderStatus",
      type: "POST",
      dataType:'json',
      data: { status: status , order_id: order_id},
      success: function(response){
        console.log(response)
        window.location.reload()
        // alert("Estado Actualizado")
      }
    })

  })

</script>