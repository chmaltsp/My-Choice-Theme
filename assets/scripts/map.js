// jshint ignore: start
$(function(){
	$(".mapcontainer").mapael({
		map : {
            // Set the name of the map to display
			name : "southern_wisconsin",
            width:225,
            defaultArea : {
            attrs : {
                stroke: "#FFF"
            },
            attrsHover : {
                fill: " "
            }
        }
		}, 
        areas : {
            "rect3" : {
                attrs : {
                    fill: "#e0f5fc",
                    stroke: "#FFF"
                },
                attrsHover : {
                    fill: "#bef0ff"
                }
            },
            "Sheboygan" : {
                tooltip : {
                    content : "Sheboygan Resource Center" 
                },
                attrs: {
                    fill: "#85b757"
                },
                attrsHover : {
                    fill: "#a8cc87"
                }
            },
            "SheboyganText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Milwaukee" : {
                attrs: {
                    fill: "#0071b5"
                },
                attrsHover : {
                    fill: "#538BC4"
                }
            },
            "MilwaukeeText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Kenosha" : {
                attrs: {
                    fill: "#dd1e47"
                },
                attrsHover : {
                    fill: "#ef5564"
                }
            },
            "KenoshaText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Racine" : {
                attrs: {
                    fill: "#76b83f"
                },
                attrsHover : {
                    fill: "#98ca63"
                }
            },
            "RacineText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Ozaukee" : {
                attrs: {
                    fill: "#006a5a"
                },
                attrsHover : {
                    fill: "#008d70"
                }
            },
            "OzaukeeText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Washington" : {
                attrs: {
                    fill: "#a2228e"
                },
                attrsHover : {
                    fill: "#cb1f90"
                }
            },
            "WashingtonText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Walworth" : {
                attrs : {
                     fill: "#2BC4F3"
                    
                },
                attrsHover : {
                    fill: "#71ddff"
                }
               
            },
            "WalworthText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Waukeesha" : {
                attrs : {
                    fill : "#FAAC18"
                },
                attrsHover : {
                    fill : "#FFCA05"
                }
            },
            "WaukeshaText" : {
                attrs : {
                    fill : "#FFFFFF",
                    stroke : "#FFFFFF"
                }
            }
        }
	});
});
// jshint ignore: end