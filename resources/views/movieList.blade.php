<!DOCTYPE html>
<html lang="en">
  <head>
    <title>movie watch list</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      @media (min-width: 576px) {
        .jumbotron {
          padding: 1rem 2rem;
        }
      }
      .errdiv {
        color: red;
        font-weight: bold;
      }

      label {
        margin-bottom: 0;
      }

      .tdaction {
        width: 15%;
      }

      .tdSr {
        width: 7%;
      }

      .jumbotron {
        margin-bottom: 0.5rem;
      }

      strong {
        font-size: 24px !important;
      }

      input.largerCheckbox {
        width: 20px;
        height: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron text-center bg-dark text-white">
        <h2>Movie Watch List</h2>
      </div>
      <div class="form-row">
        <div class="col-md-3">
          <label>Movie Name <span class="errdiv"> *</span></label>
          <input
            id="txtName"
            type="text"
            class="form-control txt txtName"
            placeholder="Enter Movie Name"
            required
          />
          <input id="txtId" type="hidden" class="form-control txt" />
        </div>
        <div class="col-md-3 col-sm-6 col-6">
          <label>Movie Rating <span class="errdiv"> *</span></label>
          <input
            id="txtContact"
            data-type="number"
            type="text"
            minlength="10"
            maxlength="10"
            class="form-control txt txtContact"
            placeholder="Enter Movie Ratings"
            required
          />
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 col-sm-7">
          <label>Ulasan <span class="errdiv"> *</span></label>
          <textarea
            id="txtAddress"
            class="form-control txt txtAddress"
            rows="3"
            maxlength="250"
            placeholder="Masukkan Komentar"
            required
          ></textarea>
        </div>
      </div>
      <div class="row pt-2">
        <div class="col-md-2">
          <button type="button" class="btn btn-success" id="btnSave">
            Save
          </button>
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-secondary" id="btnClear">
            Clear
          </button>
        </div>
        <div class="col-md-2">
          <a class="btn btn-secondary" href="/"> Kembali </a>
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-md-12 col-sm-12 col-12 p-2">
          <table
            id="tblData"
            class="table table-bordered table-hover table-striped"
          >
            <thead>
              <tr>
                <th>No</th>
                <th>Movie Name</th>
                <th>Movie Rating</th>
                <th>Komentar</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="script/movieScript.js"></script>
  </body>
</html>
