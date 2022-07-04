<form id="sign-out" action="/controller/sign-out-controller.php" method="post">
    <div class="mb-3">
        <input type="text" class="form-control" name="fullName" max="50" min="15" placeholder="Full name" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="username" max="10" min="4" placeholder="Username" required>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="mb-3">
        <input type="tel" class="form-control" name="phoneNumber" placeholder="Phone number" required>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-danger">Sign out</button>
</form>