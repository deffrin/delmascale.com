<form action="send.html" method="post">
            <div class="form-row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                      <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                      <textarea placeholder="Message" name="message" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" value="Submit">
                  </div>
              </div>
             </div>
          </form>

          <?php 

          if(isset($_SESSION['msg']))
          {
            ?>
            <script>
             swal("Thank you. We have received your message!");
            </script>
          <?php
          unset($_SESSION['msg']);
          }


          ?>