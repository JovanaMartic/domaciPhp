$('#dodajZaposlenog').submit(function(){


    event.preventDefault();
    console.log("Dodavanje");
    const $form =$(this);
    const $input = $form.find('input, select, button, textarea');

    const serijalizacija = $form.serialize();
    console.log(serijalizacija);

    $input.prop('disabled', true);

    req = $.ajax({
        url: 'handler/addZaposlenog.php',
        type:'post',
        data: serijalizacija
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            alert("Zaposlen DODAT");
            location.reload(true);
        }else if (res == "Failed"){
            alert("Zaposlen NIJE DODAT");
        }
        else {
            alert("Dodavanje nije uspelo");
        }
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });
});

$('#btnDodajZ').submit(function () {
    $('#dodavanjeZ').modal('toggle');
    return false;
});



$('#izmeniZ').submit(function(){


    event.preventDefault();
    console.log("Izmena");
    const $form =$(this);
    const $input = $form.find('input, select, button, textarea');

    const serijalizacija = $form.serialize();
    console.log(serijalizacija);

    $input.prop('disabled', true);

    req = $.ajax({
        url: 'handler/updateZaposleni.php',
        type:'post',
        data: serijalizacija
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            alert("Zaposleni je izmenjen");
            location.reload(true);
        }else if (res == "Failed"){
            alert("Zaposleni NIJE izmenjen");
        }
        else {
            alert("Izmena nije uspela");
        }
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });
});


$('#brisanjeKategorije').submit(function(){
    event.preventDefault();
    console.log("Brisanje");
    const $form =$(this);
    const $input = $form.find('input, select, button, textarea');

    const serijalizacija = $form.serialize();
    console.log(serijalizacija);

    $input.prop('disabled', true);

    req = $.ajax({
        url: 'handler/deleteKategorija.php',
        type:'post',
        data: serijalizacija
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            alert("Kategorija je OBRISANA");
            location.reload(true);
        }else if (res == "Failed"){
            alert("Kategorija NIJE obrisanA");
        }
        else {
            alert("Brisanje nije uspelo");
        }
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });
});


$('#dodajKategoriju').submit(function(){


    event.preventDefault();
    console.log("Dodavanje");
    const $form =$(this);
    const $input = $form.find('input, select, button, textarea');

    const serijalizacija = $form.serialize();
    console.log(serijalizacija);

    $input.prop('disabled', true);

    req = $.ajax({
        url: 'handler/addKategorija.php',
        type:'post',
        data: serijalizacija
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            alert("Kategorija je DODATA");
            location.reload(true);
        }else if (res == "Failed"){
            alert("Kategrija NIJE DODATA");
        }
        else {
            alert("Dodavanje nije uspelo");
        }
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });
});

$('#btnDodajK').submit(function () {
    $('#dodavanjeK').modal('toggle');
    return false;
});

$('#izmeniK').submit(function(){


    event.preventDefault();
    console.log("Izmena");
    const $form =$(this);
    const $input = $form.find('input, select, button, textarea');

    const serijalizacija = $form.serialize();
    console.log(serijalizacija);

    $input.prop('disabled', true);

    req = $.ajax({
        url: 'handler/updateKategorija.php',
        type:'post',
        data: serijalizacija
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            alert("Kategorija je izmenjena");
            location.reload(true);
        }else if (res == "Failed"){
            alert("Kategorija NIJE izmenjena");
        }
        else {
            alert("Izmena nije uspela");
        }
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });
});