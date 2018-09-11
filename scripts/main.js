document.addEventListener('DOMContentLoaded', refreshPage());


function refreshPage() {
    let xhr = new XMLHttpRequest();

    xhr.open('GET', 'chat_main.php', true);

    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 &&xhr.status == 200) {
            document.querySelector('#chat_data')
            .innerHTML = xhr.responseText;
        }
    }


    xhr.send();
}
