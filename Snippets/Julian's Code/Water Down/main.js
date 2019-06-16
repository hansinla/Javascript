var totalWaterUsage = 0, grassAmount = 4, showerAmount = 10, laundryAmount = 1, bathAmount = 1, 
familyamount = 4, roundWaterUsage = 0, familyShowerAmount = 0, familyBathAmount = 0;

$(document).ready(function() {
	displayBarUpdate();
	jQueryUpdate();
});

function showerWaterUsage(select) {
	showerAmount = select.value * 4; //gallons for that amount of time
	familyShowerAmount = showerAmount * familyamount; 
}

function grassWaterUsage(select) {
	grassAmount = select.value * 12; //gallons for that amount of time
}

function laundryWaterUsage(select) {
	laundryAmount = select.value * 50; //gallons for that amount of time
}

function bathWaterUsage(select) {
	bathAmount = select.value * 20; //gallons for that amount of time
	familyBathAmount = bathAmount * familyamount; 
}

function familySizeCalc(select) {
	familyamount = select.value;
}

function barCalculator() {
	totalWaterUsage = familyShowerAmount + grassAmount + laundryAmount + familyBathAmount;
	var waterPerFamilyMember = familyamount * 72; 
	var averageWaterUsage = totalWaterUsage / waterPerFamilyMember;
	var waterUsagePercent = averageWaterUsage * 100;
	roundWaterUsage = Math.round(waterUsagePercent * 10) / 10;
	displayBarUpdate();
	if (roundWaterUsage > 100) {
		document.getElementById("bar-color").style.backgroundColor="red";
		document.getElementById("title-color").style.backgroundColor="#E60000";
	}
	jQueryUpdate();
	console.log("totalWaterUsage= ", totalWaterUsage, " familyamount= ", familyamount, " showerAmount = ", showerAmount,
	 " grassAmount= ", grassAmount, " bathAmount= ", bathAmount, " laundryAmount= ", laundryAmount);
}

function displayBarUpdate() {
	var str1 = "<div class='skillbar clearfix' data-percent='";
	str1 += String(roundWaterUsage);
	str1 += "%'>";
	str1 += "<div class='skillbar-title' id='title-color' style='background: #88cd2a;'>";
	str1 += "<span>Usage</span></div>";
	str1 += "<div class='skillbar-bar' id='bar-color' style='background: #88cd2a;'></div>";
	str1 += "<div class='skill-bar-percent'>";
	str1 += String(roundWaterUsage);
	str1 += "%";
	str1 += "</div></div>";
	document.getElementById("bar").innerHTML = str1;
}

function jQueryUpdate() {
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},1000);
	});
}