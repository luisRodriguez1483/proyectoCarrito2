<form>
              	<div>
              		<label class="formulario">Usuario: </label>
                        <input type="hidden" id="idUsuario"/>
                        <input type="text" required id="txtusuario" class="caja"/>
              	</div>
              	<div>
              		<label class="formulario">Contraseña: </label>
                        <input type="text" required id="txtcontrasenia" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Nivel: </label>
                        <select id="cmbNivel">
                           <option value="0">SELECCIONE UNA OPCION....</option>
                            <option value="Administrador">Administrador</option>
                             <option value="Secretaria">Secretaria</option>

                	</select>
                </div>
                <div>
              		<label class="formulario">Status: </label>
                        <select id="cmbStatus">
                            <option value="0">SELECCIONE UNA OPCION....</option>
                            <option value="Activo">Activo</option>
                            <option value="Suspendido">Suspendido</option>
                	</select>
                </div>
                <div>
                    <input type="button" value="Enviar" id="btnRegUsuario"/></a>
                </div>
     </form>
