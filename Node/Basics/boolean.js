function toggleBoolean(code){
	if (typeof code === "boolean") {
		return !code;
	}
}

console.log(toggleBoolean(true));