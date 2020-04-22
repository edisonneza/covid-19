<?php
require_once '../functions.php';

$token = "04ccf460dd35d6d16e08264f9f637fb2"; //[TODO] implement real auth

if(GET('token') == $token){

$info = '[
	{
		"date": "2020-02-05",
		"tests": 4,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-06",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-07",
		"tests": 1,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-08",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-09",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-10",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-11",
		"tests": 1,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-12",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-13",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-14",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-15",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-16",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-17",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-18",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-19",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-20",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-21",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-22",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-23",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-24",
		"tests": 2,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-25",
		"tests": 0,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-26",
		"tests": 5,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-27",
		"tests": 4,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-28",
		"tests": 6,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-02-29",
		"tests": 3,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-01",
		"tests": 3,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-02",
		"tests": 2,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-03",
		"tests": 5,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-04",
		"tests": 6,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-05",
		"tests": 8,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-06",
		"tests": 3,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-07",
		"tests": 5,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-08",
		"tests": 1,
		"infections": [],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-09",
		"tests": 6,
		"infections": [
			{
				"city": "Tiranë",
				"number": 2
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-10",
		"tests": 49,
		"infections": [
			{
				"city": "Tiranë",
				"number": 7
			},
			{
				"city": "Durrës",
				"number": 1
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-11",
		"tests": 39,
		"infections": [
			{
				"city": "Tiranë",
				"number": 4
			},
			{
				"city": "Lushnjë",
				"number": 1
			}
		],
		"deaths": [
			{
				"city": "Durrës",
				"number": 1
			}
		],
		"recoveries": 0
	},
	{
		"date": "2020-03-12",
		"tests": 145,
		"infections": [
			{
				"city": "Tiranë",
				"number": 3
			},
			{
				"city": "Durrës",
				"number": 2
			},
			{
				"city": "Elbasan",
				"number": 2
			},
			{
				"city": "Rrogozhinë",
				"number": 1
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-13",
		"tests": 159,
		"infections": [
			{
				"city": "Tiranë",
				"number": 3
			},
			{
				"city": "Durrës",
				"number": 2
			},
			{
				"city": "Rrogozhinë",
				"number": 1
			},
			{
				"city": "Fier",
				"number": 4
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-14",
		"tests": 48,
		"infections": [
			{
				"city": "Tiranë",
				"number": 3
			},
			{
				"city": "Lushnjë",
				"number": 1
			},
			{
				"city": "Fier",
				"number": 1
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-15",
		"tests": 27,
		"infections": [
			{
				"city": "Tiranë",
				"number": 4
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-16",
		"tests": 31,
		"infections": [
			{
				"city": "Tiranë",
				"number": 8
			},
			{
				"city": "Fier",
				"number": 1
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-17",
		"tests": 42,
		"infections": [
			{
				"city": "Tiranë",
				"number": 4
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-18",
		"tests": 60,
		"infections": [
			{
				"city": "Tiranë",
				"number": 4
			}
		],
		"deaths": [
			{
				"city": "Lushnjë",
				"number": 1
			}
		],
		"recoveries": 0
	},
	{
		"date": "2020-03-19",
		"tests": 32,
		"infections": [
			{
				"city": "Tiranë",
				"number": 3
			},
			{
				"city": "Kavajë",
				"number": 2
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-20",
		"tests": 35,
		"infections": [
			{
				"city": "Tiranë",
				"number": 5
			},
			{
				"city": "Fier",
				"number": 1
			}
		],
		"deaths": [],
		"recoveries": 2
	},
	{
		"date": "2020-03-21",
		"tests": 46,
		"infections": [
			{
				"city": "Tiranë",
				"number": 5
			},
			{
				"city": "Fier",
				"number": 1
			}
		],
		"deaths": [],
		"recoveries": 1
	},
	{
		"date": "2020-03-22",
		"tests": 33,
		"infections": [
			{
				"city": "Tiranë",
				"number": 8
			},
			{
				"city": "Durrës",
				"number": 1
			},
			{
				"city": "Korçë",
				"number": 3
			},
			{
				"city": "Kavajë",
				"number": 1
			}
		],
		"deaths": [],
		"recoveries": 0
	},
	{
		"date": "2020-03-23",
		"tests": 45,
		"infections": [
			{
				"city": "Tiranë",
				"number": 5
			},
			{
				"city": "Durrës",
				"number": 1
			},
			{
				"city": "Fier",
				"number": 4
			},
			{
				"city": "Vlorë",
				"number": 4
			},
			{
				"city": "Shkodër",
				"number": 1
			}
		],
		"deaths": [
			{
				"city": "Tiranë",
				"number": 1
			},
			{
				"city": "Kavajë",
				"number": 1
			}
		],
		"recoveries": 2
	},
	{
		"date": "2020-03-24",
		"tests": 74,
		"infections": [
			{
				"city": "Tiranë",
				"number": 6
			},
			{
				"city": "Durrës",
				"number": 2
			},
			{
				"city": "Korçë",
				"number": 6
			},
			{
				"city": "Kavajë",
				"number": 2
			},
			{
				"city": "Lushnjë",
				"number": 3
			},
			{
				"city": "Shkodër",
				"number": 1
			},
			{
				"city": "Has",
				"number": 2
			},
			{
				"city": "Lezhë",
				"number": 1
			},
			{
				"city": "Berat",
				"number": 1
			}
		],
		"deaths": [
			{
				"city": "Tiranë",
				"number": 1
			}
		],
		"recoveries": 5
	},
	{
		"date": "2020-03-25",
		"tests": 111,
		"infections": [
			{
				"city": "Tiranë",
				"number": 11
			},
			{
				"city": "Fier",
				"number": 2
			},
			{
				"city": "Durrës",
				"number": 1
			},
			{
				"city": "Korçë",
				"number": 2
			},
			{
				"city": "Vlorë",
				"number": 1
			},
			{
				"city": "Elbasan",
				"number": 1
			},
			{
				"city": "Shkodër",
				"number": 1
			},
			{
				"city": "Lezhë",
				"number": 3
			},
			{
				"city": "Krujë",
				"number": 1
			}
		],
		"deaths": [],
		"recoveries": 7
	},
	{
		"date": "2020-03-26",
		"tests": 103,
		"infections": [
			{
				"city": "Tiranë",
				"number": 19
			},
			{
				"city": "Durrës",
				"number": 1
			},
			{
				"city": "Elbasan",
				"number": 2
			},
			{
				"city": "Fier",
				"number": 4
			},
			{
				"city": "Tropojë",
				"number": 2
			}
		],
		"deaths": [
			{
				"city": "Tiranë",
				"number": 1
			}
		],
		"recoveries": 0
	},
	{
		"date": "2020-03-27",
		"tests": 102,
		"infections": [
			{
				"city": "Tiranë",
				"number": 5
			},
			{
				"city": "Fier",
				"number": 2
			},
			{
				"city": "Durrës",
				"number": 1
			},
			{
				"city": "Korçë",
				"number": 1
			},
			{
				"city": "Shkodër",
				"number": 1
			},
			{
				"city": "Pukë",
				"number": 2
			}
		],
		"deaths": [
			{
				"city": "Tiranë",
				"number": 1
			},
			{
				"city": "Fier",
				"number": 1
			}
		],
		"recoveries": 14
	},
	{
		"date": "2020-03-28",
		"tests": 79,
		"infections": [
			{
				"city": "Tiranë",
				"number": 6
			},
			{
				"city": "Fier",
				"number": 1
			},
			{
				"city": "Krujë",
				"number": 2
			},
			{
				"city": "Pukë",
				"number": 1
			},
			{
				"city": "Tropojë",
				"number": 1
			}
		],
		"deaths": [
			{
				"city": "Tiranë",
				"number": 1
			},
			{
				"city": "Vlorë",
				"number": 1
			}
		],
		"recoveries": 2
	},
	{
		"date": "2020-03-29",
		"tests": 111,
		"infections": [
			{
				"city": "Tiranë",
				"number": 8
			},
			{
				"city": "Fier",
				"number": 1
			},
			{
				"city": "Durrës",
				"number": 1
			},
			{
				"city": "Shkodër",
				"number": 1
			},
			{
				"city": "Lezhë",
				"number": 1
			},
			{
				"city": "Krujë",
				"number": 2
			},
			{
				"city": "Mirditë",
				"number": 1
			}
		],
		"deaths": [
		],
		"recoveries": 7
	},
	{
		"date": "2020-03-30",
		"tests": 90,
		"infections": [
			{
				"city": "Tiranë",
				"number": 3
			},
			{
				"city": "Fier",
				"number": 1
			},
			{
				"city": "Durrës",
				"number": 2
			},
			{
				"city": "Korçë",
				"number": 2
			},
			{
				"city": "Shkodër",
				"number": 2
			},
			{
				"city": "Tropojë",
				"number": 1
			}
		],
		"deaths": [
			{
				"city": "Tiranë",
				"number": 2
			}
		],
		"recoveries": 4
	},
	{
		"date": "2020-03-31",
		"tests": 145,
		"infections": [
			{
				"city": "Tiranë",
				"number": 20
			},
			{
				"city": "Fier",
				"number": 0
			},
			{
				"city": "Durrës",
				"number": 0
			},
			{
				"city": "Korçë",
				"number": 0
			},
			{
				"city": "Shkodër",
				"number": 0
			},
			{
				"city": "Tropojë",
				"number": 0
			}
		],
		"deaths": [
			{
				"city": "Tiranë",
				"number": 7
			},
			{
				"city": "Fieri",
				"number": 1
			},
			{
				"city": "Durrësi",
				"number": 2
			},
			{
				"city": "Vlora",
				"number": 1
			},
			{
				"city": "Lushnja",
				"number": 1
			},
			{
				"city": "Kavaja",
				"number": 2
			},
			{
				"city": "Has",
				"number": 1
			}
		],
		"recoveries": 5
	}
]';


die($info);

}

http_response_code(401);
 