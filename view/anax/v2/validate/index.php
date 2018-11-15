<h1>Validate IP address</h1>

<div class="jumbotron">
    <?php if (isset($_GET["ip"])) : ?>
        <h4>Result</h4>
        <p><?= $protocol ?></p>
        <h4>Host</h4>
        <p><?= $host ?></p>
    <?php endif; ?>

    <form class="form-signin" method="get" action="">
        <div class="form-group">
                <input class="form-control"  type="text" name="ip" placeholder="Your IP here" required>
        </div>
        <button class="btn btn-primary btn-lg btn-block"  type="submit">Validate</button>
    </form>
</div>
