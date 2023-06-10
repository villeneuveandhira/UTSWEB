<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTS Design Web</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis&display=swap">
  </head>
  <body>
    <div class="card">
        <!-- Back -->
        <br>
        <a href="http://localhost/kuliah/designweb/uts-web/" class="back">Back to Home</a>
        <br><br><br>

        <!-- Form Data -->
        <form action="" method="POST">
            <div class="form-group">
                <label class="form-label">Group's Names</label>
                <input type="text" class="form-control" placeholder="Enter your group name" name="name" autocomplete="off">
            </div>

            <div class="form-group">
                <b>Group's Gender</b>
                <div class="radio">
                    <input type="radio" name="gender" id="male" class="male" value="Boy" <?= @$grup['jenis_grup'] == 'Boy' ? 'checked' : '' ?>>Boys</input>
                    <input type="radio" name="gender" id="female" class="female" value="Girl" <?= @$grup['jenis_grup'] == 'Girl' ? 'checked' : '' ?>>Girls</input>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Members</label>
                <input type="number" class="form-control" placeholder="Enter the number of group members" name="member" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Labels</label>
                <input type="text" class="form-control" placeholder="Enter your group's label name" name="label" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label class="form-label">Nation</label>
                <input type="text" class="form-control" placeholder="Enter your group's origin" name="origin" autocomplete="off">
            </div>

            <div class="form-group">
                <b>Status Active</b>
                <div class="radio">
                    <input type="radio" name="status" id="male" class="male" value="Yes" <?= @$grup['jenis_grup'] == 'Yes' ? 'checked' : '' ?>>Yes</input>
                    <input type="radio" name="status" id="female" class="female" value="No" <?= @$grup['jenis_grup'] == 'No' ? 'checked' : '' ?>>No</input>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Fandom's Name</label>
                <input type="text" class="form-control" placeholder="Enter your group's fan name" name="fandom" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Debut's Year</label>
                <input type="number" class="form-control" placeholder="Enter the year of group's debut" name="debut" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Active until</label>
                <input type="text" class="form-control" placeholder="How long the group still active?" name="tahun" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Debut's Song</label>
                <input type="text" class="form-control" placeholder="Enter your group's first song" name="lagu" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Albums</label>
                <input type="number" class="form-control" placeholder="How many albums the group had?" name="album" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Group's Leader</label>
                <input type="text" class="form-control" placeholder="Enter group leader's name" name="leader" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Recent Comeback's Year</label>
                <input type="number" class="form-control" placeholder="Recent comeback" name="comeback" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Worth $</label>
                <input type="text" class="form-control" placeholder="Net Worth" name="worth" autocomplete="off">
            </div>

            <div class="form-group">
                <button type="submit" class="save" name="submit">Register</button>
            </div>
        </form>
    </div>
  </body>
</html>
