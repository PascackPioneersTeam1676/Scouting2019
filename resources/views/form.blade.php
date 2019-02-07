@extends('layout.main')

<!-- Page title -->
@section('title', 'Team 1676 Scouting')

<!-- Insert main body content here -->
@section('content')
<h1 class="scouting-header">Submit Scouting Data</h1>
<div class="row">
	<div class="col-sm-12">
		<!-- Circles which indicates the steps of the form: -->
		<div style="text-align:center;margin-top:40px;">
			<span class="step"></span>
			<span class="step"></span>
			<span class="step"></span>
			<span class="step"></span>
		</div>
		<div id="tab" class="content" role="tabpanel" aria-labelledby="pregame-trigger">
			<h2 class="text-center">Pre-match</h2>
			<form name="form">
				<div class="form-group row">
					<label for="matchNumber" class="col-sm-2 col-form-label">Match Number</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="matchNumber" value="0">
					</div>
				</div>
				<div class="form-group row">
					<label for="teamNumber" class="col-sm-2 col-form-label">Team Number</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="teamNumber" value="0">
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
				<br>
			</div>
			<div id="tab" class="content" role="tabpanel" aria-labelledby="midgame-trigger">
				<h2 class="text-center">During the game</h2>
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
							<div class="input-group-append" id="button-addon4">
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
							<div class="input-group-append" id="button-addon4">
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
							<div class="input-group-append" id="button-addon4">
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
							<div class="input-group-append" id="button-addon4">
								<button class="btn btn-outline-secondary" type="button" onclick="minus(cargoShipCargo)">-</button>
								<button class="btn btn-outline-secondary" type="button" onclick="plus(cargoShipCargo)">+</button>
							</div>
						</div>
					</div>
				</div>
				<br>
			</div>
			<div id="tab" class="content" role="tabpanel" aria-labelledby="endgame-trigger">
				<h2 class="text-center">Endgame</h2>
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
							<input type="number" class="form-control" id="redScore" value="0">
						</div>
					</div>
					<div class="form-group row">
						<label for="blueScore" class="col-sm-2 col-form-label">Blue Score</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="blueScore" value="0">
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
			</form>
			<br>
		</div>
		<div id="tab" class="content" role="tabpanel" aria-labelledby="review-trigger">
			<h2 class="text-center">Review</h2>
			<div class="row">
				<div class="col-sm-6">
					<h4 class="text-center">Pre-match <br><button class="btn btn-outline-secondary" type="button" onclick="stepper.previous();stepper.previous();stepper.previous()">Edit</button></h4>
					<p class="text-center">Match Number: <b id="matchNumber-review"></b></p>
					<p class="text-center">Team Number: <b id="teamNumber-review"></b></p>
					<p class="text-center">Alliance: <b id="alliance-review"></b></p>
					<p class="text-center">Starting Point: <b id="startingPoint-review"></b></p>
					<br>
				</div>
				<div class="col-sm-6">
					<h4 class="text-center">During the game <br><button class="btn btn-outline-secondary" type="button" onclick="stepper.previous();stepper.previous()">Edit</button></h4>
					<p class="text-center">Mode: <b id="mode-review"></b></p>
					<p class="text-center">Rocket Panels: <b id="rocketPanels-review"></b></p>
					<p class="text-center">Rocket Cargo: <b id="rocketCargo-review"></b></p>
					<p class="text-center">Cargo Ship Panels: <b id="cargoShipPanels-review"></b></p>
					<p class="text-center">Cargo Ship Cargo: <b id="cargoShipCargo-review"></b></p>
					<br>
				</div>
				<div class="col-sm-6">
					<h4 class="text-center">End game <br><button class="btn btn-outline-secondary" type="button" onclick="stepper.previous()">Edit</button></h4>
					<p class="text-center">Ending Hab: <b id="hab-review"></b></p>
					<p class="text-center">Red Score: <b id="redScore-review"></b></p>
					<p class="text-center">Blue Score: <b id="blueScore-review"></b></p>
					<br>
				</div>
				<div class="col-sm-6">
					<h4 class="text-center">Robot Status (If Applicable)<br><button class="btn btn-outline-secondary" type="button" onclick="stepper.previous()">Edit</button></h4>
					<p class="text-center">E-Stopped: <b id="e-stopped-review"></b></p>
					<p class="text-center">DQed: <b id="dqed-review"></b></p>
					<p class="text-center">Disabled: <b id="disabled-review"></b></p>
					<p class="text-center">Bypassed: <b id="bypassed-review"></b></p>
					<br>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center">
			<button class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>&nbsp;
			<button class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
		</div>
	</div>
</div>
<br>
@endsection

<!-- Insert custom scripts here -->
@section('custom_scripts')
@endsection
