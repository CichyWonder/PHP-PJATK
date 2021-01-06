<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> formularz </title>
</head>
<body>
	
	
	
	<FORM action="" method="post">
	<fieldset> 
		<legend> Formularz kontaktowy </legend>
	<ul>
	
	<li> imię i nazwizko * <input name="imie" placeholder="Twoje imię i nazwisko" required > </li> 
	
	<li> Adres email * <input type="email" name="email" placeholder="twój email"required> </li> 
	
	<li> Telefon kontaktowy * <input name="telefon"  placeholder= "twoj telefon" required > </li>
	
	
        <li>  <label> Wybierz temat * <label> </li>
	
	<select name="opcje">
	
	<option> Wykonanie strony internetowej </option>
	
	
	</select> <br>
	
             <li> <label> Treść Wiadomości... * </label> </li>
	
	<textarea name="tekst"> Wpisz tutaj treść swojej wiadomości </textarea>
	
	
	
	<li> Preferowana forma kontaktu </li> 
		<input type="checkbox" name="kontakt1" value="telefon"> <label> Telefon <label> <br>
		<input type="checkbox" name="kontakt2" value="Email"> <label> Email </label> <br>
	
	<li> Posiadasz już stronę www? </li> 
		<input type="radio" name="strona1`"> <label> Tak <label> <br>
		<input type="radio" name="strona2"> <label> Nie <label> <br>
	
	
	<li> Załączniki <input type="file" name="zdjecie"> </li> </br>
	
	</ul>
	</fieldset>
	
	<input type="submit" value="Wyślij potwierdzenie">
	
	</FORM>

</body>
</html>