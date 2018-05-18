<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FORMULARIO</title>
        <style>
            
        </style>
    </head>
    <body>
        <h1>FORMULARIO DE INGRESO</h1>
        
        <form action="PROCESAR.php" method="post" name="FORMULARIO DE TRANSMILENIO">
            <fieldset>
                <div>
                    <label>USUARIO</label>
            <input type="text" name="usuario" ><br>   
                </div>
                <div>
                    <label>CLAVE</label> 
            <input type="password" name="clave" ><br> 
             </div>
                <div>
                    <label>VALOR PASAJE TRONCAL</label> 
            <input type="number" name="valortroncal" ><br>
                </div>
                 <div>
                    <label>VALOR PASAJE ZONAL</label> 
            <input type="number" name="valorzonal" ><br>
                </div>
                <div>
                     <label>FECHA</label> 
            <input type="number" name="fecha" ><br>
             </div>
                
            <input type="submit"  valve="Enviar" />
            
            </fieldset>
              </form>
      
    </body>
</html>
