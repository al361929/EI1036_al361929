<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="userName" class="item_requerid" size="20" maxlength="25" value="<?php print $userName ?>"
		 placeholder="Miguel" />
		<br/>
		<label for="apellidos">Apellidos</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="25" value="<?php print $surname ?>"
		 placeholder="Cervantes" />
		<br/>
		<label for="direccion">Dirección</label>
		<br/>
		<input type="text" name="address" class="item_requerid" size="20" maxlength="25" value="<?php print $address ?>"
		 placeholder="c/Asturias" />
		<br/>
		<label for="ciudad">Ciudad</label>
		<br/>
		<input type="text" name="city" class="item_requerid" size="20" maxlength="25" value="<?php print $city ?>"
		 placeholder="Castellón" />
		<br/>
		<label for="cp">CP</label>
		<br/>
		<input type="text" name="zip_code" class="item_requerid" size="20" maxlength="25" value="<?php print $zip_code ?>"
		 placeholder="12006" />
		<br/>
		<label for="foto">Foto</label>
		<br/>
		<input type="text" name="foto_file" class="item_requerid" size="20" maxlength="25" value="<?php print $foto_file ?>"
		 placeholder="URL" />
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>