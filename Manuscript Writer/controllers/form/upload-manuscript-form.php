<div class="container">
  <div class="row">
      <div class="">
        <h2>Upload manuscript</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
          <form id="contact-form" class="form" action="components/upload.php" method="POST" role="form">
              <div class="form-group">
                  <label class="form-label" for="title">Title</label>
                  <input type="text" class="form-control input-lg" id="title" name="title" placeholder="Title" tabindex="1" required>
              </div>
              <div class="form-group">
                  <label class="form-label" for="title">Author Name</label>
                  <input type="text" class="form-control input-lg" id="name" name="author" placeholder="Title" tabindex="1" required>
              </div>
              <div class="form-group">
                <div class="form-group">
                    <label class="form-label" for="category">Category</label>
                    <input type="email" class="form-control input-lg" id="category" name="category" placeholder="Select Category" tabindex="2" required>
                </div>
                  <label class="form-label" for="synopsis">Synopsis</label>
                  <textarea rows="5" cols="50" name="synopsis" class="form-control input-lg" id="synopsis" placeholder="..." tabindex="4" required></textarea>
              </div>
              <div class="form-group float-label-control">
                  <label for="">Upload Cover Image</label>
                  <center><input name="ImageFile" id="fileToUpload"  class="btn btn-primary ladda-button" data-style="zoom-in"  type="file"/></center>
              </div>
              <div class="form-group float-label-control">
                  <label for="">Upload Manuscript</label>
                  <center><input name="PdfFile" id="fileToUpload1" class="btn btn-primary ladda-button" data-style="zoom-in"  type="file"/></center>
              </div>
              <div class="text-center">
                  <button type="submit" name="upload" class="btn btn-start-order">Upload</button>
              </div>

          </form>
      </div>
  </div>
</div>
