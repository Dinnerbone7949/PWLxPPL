<!DOCTYPE html>
<html lang="en">
<head>
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

    body {
        font-family: 'Poppins';
        color: white;
        background: #101827;
        margin: 0;
    }

    #add-main {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 100px;
        margin: 20px 300px 20px 300px;
    }

    #add-title h1 {
        margin: 0;
    }

    #upload-btn {
        display: none;
    }

    #upload-bar {
        width: 500px;
        height: 950px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 2px dashed white;
        border-radius: 15px;
        margin-top: 30px;
    }

    .input-form-add {
        display: flex;
        flex-direction: column;
    }
    
    .input-form-add label {
        font-size: 25px;
        font-weight: bold;
    }

    .input-add {
        width: 600px;
        height: 40px;
        background: transparent;
        border: 2px solid white;
        border-radius: 10px;
        color: white;
        padding: 5px 20px 5px 20px;
        font-size: 20px;
        margin-top: 10px;
    }

    #form-input {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    #desc-add {
        width: 600px;
        height: 150px;
        background: transparent;
        border: 2px solid white;
        border-radius: 10px;
        color: white;
        padding: 15px 20px 15px 20px;
        font-size: 20px;
        margin-top: 10px;
        align-items: start;
    }

    #select-ctg {
        width: 644px;
        height: 60px;
        background: transparent;
        border: 2px solid white;
        border-radius: 10px;
        color: white;
        padding: 15px 20px 15px 20px;
        font-size: 20px;
        margin-top: 10px;
    }

    #btn-add {
        display: flex;
        flex-direction: row;
        justify-content: end;
        gap: 20px;
        width: 1297px;
        padding: 0px 300px 0px 300px;
        margin-top: 100px;
    }

    #simpan-btn {
        width: 200px;
        height: 60px;
        border: none;
        outline: none;
        background: #0329E1;
        padding: 0px 20px 0px 20px;
        font-size: 20px;
        font-weight: bold;
        color: white;
        border-radius: 10px;
    }

    #simpan-btn:hover {
        width: 200px;
        height: 60px;
        border: none;
        outline: none;
        background: white;
        padding: 0px 20px 0px 20px;
        font-size: 20px;
        font-weight: bold;
        color: #0329E1;
        border-radius: 10px;
    }

    #cancel-btn {
        width: 200px;
        height: 60px;
        border: none;
        outline: none;
        background: white;
        padding: 0px 20px 0px 20px;
        font-size: 20px;
        font-weight: bold;
        color: #0329E1;
        border-radius: 10px;
    }

    #cancel-btn:hover {
        width: 200px;
        height: 60px;
        border: none;
        outline: none;
        background: #0329E1;
        padding: 0px 20px 0px 20px;
        font-size: 20px;
        font-weight: bold;
        color: white;
        border-radius: 10px;
    }

    </style>
</head>
<body>
    <div>
        <div id="add-main">
            <div id="form-upload">
                <div id="add-title">
                    <h1>Tambah Film</h1>
                    <span style="font-size: 20px;">Menambah Film dari daftar film</span>
                </div>
                <form action="" id="upload-bar">
                    <label for="upload-btn">
                        <p style="margin: 0; font-size: 50px; font-weight: bold;">Upload Poster</p>
                        <p style="margin: 0; font-size: 30px; text-align: center;">JPG, PNG (Max 5 MB)</p>
                    </label>
                    <input type="file" id="upload-btn">
                </form>
            </div>
            <div id="form-input">
                <div class="input-form-add">
                    <label>Judul Film</label>
                    <input type="text" placeholder="Judul Film" class="input-add">
                </div>
                <div class="input-form-add">
                    <label>Rating</label>
                    <input type="text" placeholder="Rating" class="input-add">
                </div>
                <div class="input-form-add">
                    <label>Tahun Rilis</label>
                    <input type="text" placeholder="Tahun Rilis" class="input-add">
                </div>
                <div class="input-form-add">
                    <label>Tahun Rilis</label>
                    <textarea type="text" placeholder="Tahun Rilis" id="desc-add"></textarea>
                </div>
                <div class="input-form-add">
                    <select name="" id="select-ctg">
                        <option value="">General</option>
                        <option value="">PG</option>
                        <option value="">PG-13</option>
                        <option value="">Fiction</option>
                        <option value="">Non-fiction</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="btn-add">
            <button id="cancel-btn">Cancel</button>
            <button id="simpan-btn">Simpan</button>
        </div>
    </div>
</body>
</html>