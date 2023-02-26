function uploadktpsuami() {
    let input = document.getElementById("ktpsuami");
    let files = input.files;
    let formData = new FormData();
    formData.append("ktpsuami", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_ktpsuami'), true);
    xhr.send(formData);
}

function uploadktpistri() {
    let input = document.getElementById("ktpistri");
    let files = input.files;
    let formData = new FormData();
    formData.append("ktpistri", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_ktpistri'), true);
    xhr.send(formData);
}

function uploadnpwp() {
    let input = document.getElementById("npwp");
    let files = input.files;
    let formData = new FormData();
    formData.append("npwp", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_npwp'), true);
    xhr.send(formData);
}

function uploadbpjs() {
    let input = document.getElementById("bpjs");
    let files = input.files;
    let formData = new FormData();
    formData.append("bpjs", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_bpjs'), true);
    xhr.send(formData);
}

function uploadkk() {
    let input = document.getElementById("kk");
    let files = input.files;
    let formData = new FormData();
    formData.append("kk", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_kk'), true);
    xhr.send(formData);
}

function uploadnikah() {
    let input = document.getElementById("nikah");
    let files = input.files;
    let formData = new FormData();
    formData.append("nikah", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_nikah'), true);
    xhr.send(formData);
}

function uploaddomisili() {
    let input = document.getElementById("domisili");
    let files = input.files;
    let formData = new FormData();
    formData.append("domisili", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_domisili'), true);
    xhr.send(formData);
}

function uploadsknonrumah() {
    let input = document.getElementById("sknonrumah");
    let files = input.files;
    let formData = new FormData();
    formData.append("sknonrumah", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_sknonrumah'), true);
    xhr.send(formData);
}

function uploadskistrinonkerja() {
    let input = document.getElementById("skistrinonkerja");
    let files = input.files;
    let formData = new FormData();
    formData.append("skistrinonkerja", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_skistrinonkerja'), true);
    xhr.send(formData);
}

function uploadskkerja() {
    let input = document.getElementById("skkerja");
    let files = input.files;
    let formData = new FormData();
    formData.append("skkerja", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_skkerja'), true);
    xhr.send(formData);
}

function uploadslip() {
    let input = document.getElementById("slip");
    let files = input.files;
    let formData = new FormData();
    formData.append("slip", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_slip'), true);
    xhr.send(formData);
}

function uploadpph() {
    let input = document.getElementById("pph");
    let files = input.files;
    let formData = new FormData();
    formData.append("pph", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_pph'), true);
    xhr.send(formData);
}

function uploadrekkoran() {
    let input = document.getElementById("rekkoran");
    let files = input.files;
    let formData = new FormData();
    formData.append("rekkoran", files[0]);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', base_url + ('User_Controller/submit_rekkoran'), true);
    xhr.send(formData);
}