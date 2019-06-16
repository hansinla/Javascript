function grassWaterUsage(this) {
	var grassAmount = this.value * 12; //gallons for that amount of time
}

function showerWaterUsage(this) {
	var showerAmount = this.value * 4; //gallons for that amount of time
}

function laundryWaterUsage(this) {
	var laundryAmount = this.value * 50; //gallons for that amount of time
}

function bathWaterUsage(this) {
	var bathAmount = this.value * 20; //gallons for that amount of time
}

function familySizeCalc(this, showerAmount, bathAmount) {
	showerAmount *= this.value; 
	bathAmount *= this.value; 
}

function barCalculator(showerAmount, grassAmount, laundryAmount, bathAmount) {
	var totalWaterUsage = showerAmount + grassAmount + laundryAmount + bathAmount;
	totalWaterUsage /= 72;
}
