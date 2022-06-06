# Create Barcode Generator in PHP

## Documentation

- [Docs](https://github.com/davidscotttufts/php-barcode)

## Steps -

- index.php (it creates the barcode using barcode-library file. ) . Place following html & php code in index.php file.
```html
<form method="POST">
    <div class="form-group">
        <label>Enter a text</label>
        <input type="text" class="form-control" name="barcode"/>
        <br />
        <button class="btn btn-primary" name="generate">Generate</button>
        <br />
    </div>
</form>
```
```php
<?php
if(ISSET($_POST['generate'])){
    $code=$_POST['barcode'];
    echo "<center><img alt='testing' src='barcode-library.php?codetype=code39&size=50&text=".$code."&print=true'/></center>";
}
//  barcode-library.php used to generate barcode.
?>
```
- barcode-library.php (Barcode library)
generates barcodes in different barcode formats like Code 128, Code 39, Code 2of5, and Codabar.