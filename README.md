# Laravel Comics

Create un nuovo progetto Laravel. Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.

Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

## Creazione del layout

Per non ripetere lo stesso codice vado a creare un layout principale che andrò a riutilizzare per le pagine del sito web.

La struttura che si andrà a ripetere presenta un header e un footer pressochè identici per ogni pagina, dunque questi due saranno inclusi nel layout condiviso (`include('shared.header` e `include('shared.footer`).

Il main invece sarà personalizzato per ogni pagina, da qui il comando `@yeald('main)`.

Nel layout includeo anche il file js, da cui partono tutte le inclusioni dei file necessari (Js, Sass, Bootstrap ...), ` @vite('resources/js/app.js')`.

## Creazione delle parti condivise

### Header

L' Header presenta il logo e la navigazione tramite links.

Tramite `route` decido a che pagina rimandare per ogni link, per questini di comodità ho impostato il logo come link alla Home mentre tutti gli altri link mandano alla pagina prodotto.

```html
{{-- logo --}}
<a href="{{ route('home') }}">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" />
</a>
```

```html
@foreach ($links as $link)
<li>
    <a href="{{ route('prodotto') }}" class="d-flex align-items-center"
        >{{ $link['name'] }}</a
    >
</li>
@endforeach
```

Queste le due route del sito, a cui ho assegnato un name.

```php
Route::get('/', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('welcome', $data);
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('prodotto');
```

### Footer

Il Footer non presenta nessuna nuova funzionalità, è un semplice compia e incolla del codice già creato nel vecchio progetto [vite-comics](https://github.com/CaldatoLuca/vite-comics)

## Creazione della pagina welcome

La funzionalità principale di questa pagina è l' ottenimento di dati da un file esterno 'comicsdb.php'.

Questo è possibile perchè passo alla pagina, tramite route, il dato desiderato.

```php
Route::get('/', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('welcome', $data);
})->name('home');
```

Creo un array di dati (`$data`) a cui passo come primo argomento un ulteriore array che chiamo 'comics'.

Dentro 'comics' inserisco il contenuto del file 'comicsdb', un retrun di un array di fumetti.

Passo poi il dato nel `return view(... , $data)

Posso quindi fare un 'foreach' per visualizzare i dati in pagina

```html
@foreach ($comics as $comic)
<div class="element">
    <div class="image">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
    </div>
    <div class="text">{{ $comic['title'] }}</div>
</div>
@endforeach
```
