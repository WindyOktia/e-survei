<div class="main-card card">
    <div class="card-body">
        <h5 class="card-title">Tambah Data Siswa</h5>
        <form id="signupForm" class="col-md-10 mx-auto" method="post" action="#" novalidate="novalidate">
        
            <div class="form-group">
                <label for="username">Nama</label>
                <div>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Judul">
                </div>
            </div>
            
            <div class="form-group">
                <label for="username">NIPD</label>
                <div>
                    <input name="text" id="exampleText" class="form-control" placeholder="NIPD" type="number">
                </div>
            </div>

            <div class="form-group">
                <label for="username">Kelas</label>
                <select class="multiselect-dropdown form-control">
                    <option value="AK">XI IPS 1</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                </select>
            </div>

            <div class="form-group">
                <label for="username">Nama Ibu</label>
                <input name="text" id="exampleText" class="form-control" placeholder="ex. Rohayati" type="">      
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right mb-3" name="signup" value="Sign up">Submit
                </button>
            </div>
        </form>
    </div>
</div>