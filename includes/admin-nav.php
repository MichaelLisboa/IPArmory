<div class="navbar-header">	
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="/index.php">
		<h1 id="logo"><img src="/img/logo.png" style="width: 150px" alt="<?php echo $companyName ?>" /></h1>
	</a>
</div>
<nav class="collapse navbar-collapse navbar-right" role="Navigation">
    <ul id="nav" class="nav navbar-nav" data-toggle="collapse" data-target="#navbar-menu">
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'view.php' ? 'current':'dead' ?>"><a href="view.php" data-toggle="collapse" data-target=".navbar-collapse.in">All Guests</a></li>
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'new.php' ? 'current':'dead' ?>"><a href="new.php" data-toggle="collapse" data-target=".navbar-collapse.in">New Guest</a></li>
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'access.php' ? 'current':'dead' ?>"><a href="access.php" data-toggle="collapse" data-target=".navbar-collapse.in">Activity</a></li>
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'company-setup.php' ? 'current':'dead' ?>"><a href="company-setup.php" data-toggle="collapse" data-target=".navbar-collapse.in">Company</a></li>
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'content.php' ? 'current':'dead' ?>"><a href="content.php" data-toggle="collapse" data-target=".navbar-collapse.in">Content</a></li>
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'files.php' ? 'current':'dead' ?>"><a href="files.php" data-toggle="collapse" data-target=".navbar-collapse.in">Files</a></li>
        <li><a href="/logout.php?logout" data-toggle="collapse" data-target=".navbar-collapse.in">Logout</a></li>
    </ul>
</nav>