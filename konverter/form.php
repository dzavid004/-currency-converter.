<form method="POST" action="">
	<div id="form_wrap">
			<div class="input_wrap">
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label"><p class="text-size font-mini lead">Укажите сумму:</p></label>
					<input type="number" name="summa" class="form-control" id="exampleInputPassword1">
				</div>
			</div>
			
			<div class="input_wrap">
				<p class="text-size font-mini lead">Введите валюту 1:</p>
				<select name="value1" class="form-select form-select-lg mb-3" aria-label="Large select example" class="col">
						<option disabled selected>Укажите валюту</option>
						<option value='USD'>Доллары (USD)</option>
						<option value='TG'>Тенге (TG)</option>
						<option value='RUB'>Рубли (RUB)</option>
						<option value='EU'>Евро (EU)</option>
				</select>
			</div>
				 
		
				
			<div class="input_wrap">
				
				<p class="text-size font-mini lead">Введите валюту 2:</p>
					 
				<select name="value2" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option disabled selected>Укажите валюту</option>
					<option value='USD'>Доллары (USD)</option>
					<option value='TG'>Тенге (TG)</option>
					<option value='RUB'>Рубли (RUB)</option>
					<option value='EU'>Евро (EU)</option>
				</select>	
			</div>	
	</div>
	<div class="float-end">
		<button type="submit" class="btn btn-warning"><span>Конвертировать</span></button>
	</div>
</form>

