@extends('index')

@section('title')
    Main page
@endsection

@section('form_consultation')
    <?php if (!isset($_REQUEST['doGO'])) { ?>
    <div style="padding-bottom: 20px;">
        Надаємо зручну консультацію щодо асортименту
    </div>
    <form action="/data" method="post">
        @csrf
        Ім'я:<br><input type="text" name="name" value=""><br>
        Номер телефону: <input type="text" name="phone" value=""><br>
        <input type="submit" name="doGO" value="Відправити">
    </form>
    <?php } else {
        $name = strip_tags($_POST['name']);
        $phone = strip_tags($_POST['phone']);
        echo "Очікуйте дзвінок найближчим часом<br><br>Ваші дані:<br>";
        echo "$name / $phone";
    } ?>
@endsection

