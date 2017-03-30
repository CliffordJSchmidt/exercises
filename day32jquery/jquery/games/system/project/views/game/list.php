<?php foreach($games as $game) : ?>

    <div class="game">
        <div class="image">
            <img src="<?php echo $game->image_url; ?>" />
        </div>
        <div class="info">
            <h2 class="name"><?php echo $game->name; ?></h2>
            <div class="release">Released at: <?php echo $game->released_at; ?></div>
            <div class="genres">
                <?php foreach($genres_by_game[$game->id] as $genre) : ?>
                    <a href="#"><?php echo $genre->name; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="description">
                <?php echo $game->description; ?>
            </div>
            <div class="rating"><?php echo $game->rating; ?>%</div>        
        </div>
    </div>

<?php endforeach; ?>