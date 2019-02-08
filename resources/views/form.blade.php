@extends('layouts.main')

<!-- Page title -->
@section('title', 'Team 1676 Scouting')

<!-- Insert main body content here -->
@section('content')
<h1 class="scouting-header">Submit Scouting Data</h1><br>
<div class="row">
	<div class="col-sm-12">
		<form action="">

			<!-- Pre-match -->
			<div class="card-deck">
				<div class="card">
					<div class="card-body" align="center">
						<h2 class="card-title">Pre-match</h2>
						<div class="form-group row">
							<label for="matchNumber" class="col-sm-2 col-form-label">Match Number</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="number" class="form-control" id="matchNumber" value="0" min="0">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" onclick="minus(matchNumber)">-</button>
										<button class="btn btn-outline-secondary" type="button" onclick="plus(matchNumber)">+</button>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="teamNumber" class="col-sm-2 col-form-label">Team Number</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="number" class="form-control" id="teamNumber" value="0" min="0">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" onclick="minus(teamNumber)">-</button>
										<button class="btn btn-outline-secondary" type="button" onclick="plus(teamNumber)">+</button>
									</div>
								</div>
							</div>
						</div>
						<fieldset class="form-group">
							<div class="row">
								<legend class="col-form-label col-sm-2 pt-0">Alliance</legend>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="alliance" id="allianceRed" value="Red" checked>
										<label class="form-check-label" for="allianceRed">Red</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="alliance" id="allianceBlue" value="Blue">
										<label class="form-check-label" for="allianceBlue">Blue</label>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset class="form-group">
							<div class="row">
								<legend class="col-form-label col-sm-2 pt-0">Starting Point</legend>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="startingPoint" id="startingPoint1" value="1" checked>
										<label class="form-check-label" for="startingPoint1">Starting Point 1</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="startingPoint" id="startingPoint2" value="2">
										<label class="form-check-label" for="startingPoint2">Starting Point 2</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="startingPoint" id="startingPoint3" value="3">
										<label class="form-check-label" for="startingPoint3">Starting Point 3</label>
									</div>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
			</div>

			<br><hr><br>

			<!-- During the game -->
			<div class="card-deck">
				<div class="card">
					<div class="card-body" align="center">
						<h2 class="card-title">During the game</h2>
						<fieldset class="form-group">
							<div class="row">
								<legend class="col-form-label col-sm-2 pt-0">Mode</legend>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="mode" id="driving" value="Driving" checked>
										<label class="form-check-label" for="driving">Driving</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="mode" id="autonomous" value="Autonomous">
										<label class="form-check-label" for="autonomous">Autonomous</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="mode" id="both" value="Both">
										<label class="form-check-label" for="both">Both</label>
									</div>
								</div>
							</div>
						</fieldset>
						<div class="form-group row">
							<label for="rocketPanels" class="col-sm-2 col-form-label">Rocket Panels</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="number" class="form-control" id="rocketPanels" name="rocketPanels" value="0" min="0" max="3">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" onclick="minus(rocketPanels)">-</button>
										<button class="btn btn-outline-secondary" type="button" onclick="plus(rocketPanels)">+</button>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="rocketCargo" class="col-sm-2 col-form-label">Rocket Cargo</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="number" class="form-control" id="rocketCargo" name="rocketCargo" value="0" min="0" max="3">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" onclick="minus(rocketCargo)">-</button>
										<button class="btn btn-outline-secondary" type="button" onclick="plus(rocketCargo)">+</button>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="cargoShipPanels" class="col-sm-2 col-form-label">Cargo Ship Panels</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="number" class="form-control" id="cargoShipPanels" name="cargoShipPanels" value="0" min="0" max="3">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" onclick="minus(cargoShipPanels)">-</button>
										<button class="btn btn-outline-secondary" type="button" onclick="plus(cargoShipPanels)">+</button>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="cargoShipCargo" class="col-sm-2 col-form-label">Cargo Ship Cargo</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="number" class="form-control" id="cargoShipCargo" name="cargoShipCargo" value="0" min="0" max="3">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" onclick="minus(cargoShipCargo)">-</button>
										<button class="btn btn-outline-secondary" type="button" onclick="plus(cargoShipCargo)">+</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<br><hr><br>

			<!-- Endgame -->
			<div class="card-deck">
				<div class="card">
					<div class="card-body" align="center">
						<h2 class="card-title">Endgame</h2>
						<fieldset class="form-group">
							<div class="row">
								<legend class="col-form-label col-sm-2 pt-0">Ending Hab</legend>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="hab" id="hab1" value="1" checked>
										<label class="form-check-label" for="hab1">Hab 1</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="hab" id="hab2" value="2">
										<label class="form-check-label" for="hab2">Hab 2</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="hab" id="hab3" value="3">
										<label class="form-check-label" for="hab3">Hab 3</label>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset class="form-group">
							<div class="form-group row">
								<label for="redScore" class="col-sm-2 col-form-label">Red Score</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input type="number" class="form-control" id="redScore" value="0">
										<div class="input-group-append">
											<button class="btn btn-outline-secondary" type="button" onclick="minus(redScore)">-</button>
											<button class="btn btn-outline-secondary" type="button" onclick="plus(redScore)">+</button>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="blueScore" class="col-sm-2 col-form-label">Blue Score</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input type="number" class="form-control" id="blueScore" value="0">
										<div class="input-group-append">
											<button class="btn btn-outline-secondary" type="button" onclick="minus(blueScore)">-</button>
											<button class="btn btn-outline-secondary" type="button" onclick="plus(blueScore)">+</button>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<legend class="col-form-label col-sm-2 pt-0">Robot Status (If Applicable):</legend>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="e-stopped">
										<label class="form-check-label" for="e-stopped">E-Stopped</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="dqed">
										<label class="form-check-label" for="dqed">DQed</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="disabled">
										<label class="form-check-label" for="disabled">Disabled</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="bypassed">
										<label class="form-check-label" for="bypassed">Bypassed</label>
									</div>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
			</div>

			<br><hr><br>

			<!-- Submit -->
			<div class="card-deck">
				<div class="card">
					<div class="card-body" align="center">
						<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<br>
</div>
<br>
@endsection

<!-- Insert custom scripts here -->
@section('custom_scripts')
<script src="{{ asset('js/script.js') }}"></script>x
@endsection
