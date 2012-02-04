    <aside id="sidebar">
        <h2>Status check</h2>
        
        <?php if(error_check() !== false): ?>
        <p>Oh no, we found <?php echo count(error_check()) === 1 ? 'a problem' : 'some problems'; ?>!</p>
        
        <ul>
            <?php foreach(error_check() as $error): ?>
            <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <p>Nice job, keep on going!</p>        
        <?php endif; ?>
    </aside>

    <footer id="bottom">
        <small>Powered by Anchor, version <?php echo ANCHOR_VERSION; ?>.</small>
        
        <em>Make blogging beautiful.</em>
    </footer>
	
	</body>
</html>