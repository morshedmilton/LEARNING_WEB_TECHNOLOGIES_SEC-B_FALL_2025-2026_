function searchProduct() {
    var searchText = document.getElementById('search_text').value;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'ajax.php?name=' + searchText, true);
    xhr.onload = function () {
        if (this.status == 200) {
            document.getElementById('search_result').innerHTML = this.responseText;
        }
    }
    xhr.send();
}
