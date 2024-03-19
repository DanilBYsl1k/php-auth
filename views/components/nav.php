<header class="header">
    <div class="container header__container">
        <div class="header__title">
            <h1><?php echo $_GET['url'] ?? 'Home'; ?></h1>
        </div>
        <div class="header__nav">
            <nav>
                <ul class="header__nav-list">
                    <li><a href="/">Home</a></li>
                    <?php if (isset($_SESSION['user'])): ?>
                        <li><a href="/profile">Profile</a></li>
                        <li><a href="/logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>