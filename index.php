<?php
    include 'functions.php';
        $plataform = 'pc';
        $region = 'NAE';
        $epic = 'Ninja';
        $playerStats = getPlayerStats($plataform, $region, $epic);
        /*echo '<pre>';
        print_r($playerStats);
        die();*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fortnite Player Stats</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
        <link rel="icon" type="image/png" sizes="96x96" href="favicon.ico">
        <style>
            @font-face{
                font-family: 'Fortnite';
                src: url('BurbankBigCondensed-Bold.otf');
            }
            body{
                font-family: 'Fortnite';
                background: #1e1e1e;
                color: #fff;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div style="margin-bottom:20px;font-size:48px">
            <div>Fortnite Player Stats</div>
            <div style="font-size:28px;">
                Player <?php echo $epic; ?> on <?php echo $plataform; ?>
            </div>
        </div>
        <div style="width: 100%;color:#000;background:#f1ed62;font-size:26px;display:inline-block">
            <div style="padding: 5px;">
                <div style="float:left">Lifetime</div>
            </div>
        </div>
        <ul style="list-style: none;padding:0px;margin:0px;margin-bottom:20px">
            <?php foreach ($playerStats['lifeTimeStats'] as $stat) : ?>
                <li style="display:inline-block;border:1px solid #363636;padding:10px;margin-left:10px.margin-top:10px">
                    <div>
                        <div style="color:#9a9a9a;font-size:16px;">
                            <?php echo $stat['key']; ?>
                        </div>
                        <div style="font-size:22px">
                            <?php echo $stat['value']; ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div style="width:100%;color:#000;background:#f1ed62;font-size:26px;display:inline-block">
			<div style="padding:5px">
				<div style="float:left">SOLOS</div>
			</div>
		</div>
		<ul style="list-style: none;padding:0px;margin:0px;margin:0px;margin-bottom:20px">
			<?php foreach ( $playerStats['stats']['p2'] as $stat ) : ?>
				<?php if ( $stat['value'] ) : ?>
					<li style="display:inline-block;border:1px solid #363636;padding:10px;margin-left:10px;margin-top:10px">
						<div>
							<div style="color:#9a9a9a;font-size: 16px;">
								<?php echo $stat['label']; ?>
							</div>
							<div style="font-size:22px">
								<?php echo $stat['displayValue']; ?>
							</div>
							<div style="color:#9a9a9a;font-size:14px;margin-top:5px;">
								Rank
							</div>
							<div style="font-size:18px">
								<?php if ( isset( $stat['rank'] ) ) : ?>
									#<?php echo number_format( $stat['rank'] ); ?>
								<?php else : ?>
									-
								<?php endif; ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
        <div style="width:100%;color:#000;background:#f1ed62;font-size:26px;display:inline-block">
			<div style="padding:5px">
				<div style="float:left">DUOS</div>
			</div>
		</div>
		<ul style="list-style: none;padding:0px;margin:0px;margin:0px;margin-bottom:20px">
			<?php foreach ( $playerStats['stats']['p10'] as $stat ) : ?>
				<?php if ( $stat['value'] ) : ?>
					<li style="display:inline-block;border:1px solid #363636;padding:10px;margin-left:10px;margin-top:10px">
						<div>
							<div style="color:#9a9a9a;font-size: 16px;">
								<?php echo $stat['label']; ?>
							</div>
							<div style="font-size:22px">
								<?php echo $stat['displayValue']; ?>
							</div>
							<div style="color:#9a9a9a;font-size:14px;margin-top:5px;">
								Rank
							</div>
							<div style="font-size:18px">
								<?php if ( isset( $stat['rank'] ) ) : ?>
									#<?php echo number_format( $stat['rank'] ); ?>
								<?php else : ?>
									-
								<?php endif; ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
        <div style="width:100%;color:#000;background:#f1ed62;font-size:26px;display:inline-block">
			<div style="padding:5px">
				<div style="float:left">SQUADS</div>
			</div>
		</div>
		<ul style="list-style: none;padding:0px;margin:0px;margin:0px;margin-bottom:20px">
			<?php foreach ( $playerStats['stats']['p9'] as $stat ) : ?>
				<?php if ( $stat['value'] ) : ?>
					<li style="display:inline-block;border:1px solid #363636;padding:10px;margin-left:10px;margin-top:10px">
						<div>
							<div style="color:#9a9a9a;font-size: 16px;">
								<?php echo $stat['label']; ?>
							</div>
							<div style="font-size:22px">
								<?php echo $stat['displayValue']; ?>
							</div>
							<div style="color:#9a9a9a;font-size:14px;margin-top:5px;">
								Rank
							</div>
							<div style="font-size:18px">
								<?php if ( isset( $stat['rank'] ) ) : ?>
									#<?php echo number_format( $stat['rank'] ); ?>
								<?php else : ?>
									-
								<?php endif; ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
        <div style="width:100%;color:#000;background:#f1ed62;font-size:26px;display:inline-block">
			<div style="padding:5px">
				<div style="float:left">SQUADS</div>
			</div>
		</div>
		<ul style="list-style: none;padding:0px;margin:0px;margin:0px;margin-bottom:20px">
			<?php foreach ( $playerStats['stats']['p9'] as $stat ) : ?>
				<?php if ( $stat['value'] ) : ?>
					<li style="display:inline-block;border:1px solid #363636;padding:10px;margin-left:10px;margin-top:10px">
						<div>
							<div style="color:#9a9a9a;font-size: 16px;">
								<?php echo $stat['label']; ?>
							</div>
							<div style="font-size:22px">
								<?php echo $stat['displayValue']; ?>
							</div>
							<div style="color:#9a9a9a;font-size:14px;margin-top:5px;">
								Rank
							</div>
							<div style="font-size:18px">
								<?php if ( isset( $stat['rank'] ) ) : ?>
									#<?php echo number_format( $stat['rank'] ); ?>
								<?php else : ?>
									-
								<?php endif; ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
        <div style="width:100%;color:#000;background:#f1ed62;font-size:26px;display:inline-block">
			<div style="padding:5px">
				<div style="float:left">TRIOS</div>
			</div>
		</div>
		<ul style="list-style: none;padding:0px;margin:0px;margin:0px;margin-bottom:20px">
			<?php foreach ( $playerStats['stats']['p9'] as $stat ) : ?>
				<?php if ( $stat['value'] ) : ?>
					<li style="display:inline-block;border:1px solid #363636;padding:10px;margin-left:10px;margin-top:10px">
						<div>
							<div style="color:#9a9a9a;font-size: 16px;">
								<?php echo $stat['label']; ?>
							</div>
							<div style="font-size:22px">
								<?php echo $stat['displayValue']; ?>
							</div>
							<div style="color:#9a9a9a;font-size:14px;margin-top:5px;">
								Rank
							</div>
							<div style="font-size:18px">
								<?php if ( isset( $stat['rank'] ) ) : ?>
									#<?php echo number_format( $stat['rank'] ); ?>
								<?php else : ?>
									-
								<?php endif; ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
        <div style="width:100%;color:#000;background:#f1ed62;font-size:26px;display:inline-block">
			<div style="padding:5px">
				<div style="float:left">LTMs</div>
			</div>
		</div>
		<ul style="list-style: none;padding:0px;margin:0px;margin:0px;margin-bottom:20px">
			<?php foreach ( $playerStats['stats']['p9'] as $stat ) : ?>
				<?php if ( $stat['value'] ) : ?>
					<li style="display:inline-block;border:1px solid #363636;padding:10px;margin-left:10px;margin-top:10px">
						<div>
							<div style="color:#9a9a9a;font-size: 16px;">
								<?php echo $stat['label']; ?>
							</div>
							<div style="font-size:22px">
								<?php echo $stat['displayValue']; ?>
							</div>
							<div style="color:#9a9a9a;font-size:14px;margin-top:5px;">
								Rank
							</div>
							<div style="font-size:18px">
								<?php if ( isset( $stat['rank'] ) ) : ?>
									#<?php echo number_format( $stat['rank'] ); ?>
								<?php else : ?>
									-
								<?php endif; ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
    </body>
</html>