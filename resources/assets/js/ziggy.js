var Ziggy = {
	namedRoutes: {"campaign.index":{"uri":"campaign","methods":["GET","HEAD"],"domain":null},"campaign.create":{"uri":"campaign\/create","methods":["GET","HEAD"],"domain":null},"campaign.store":{"uri":"campaign","methods":["POST"],"domain":null},"campaign.show":{"uri":"campaign\/{campaign}","methods":["GET","HEAD"],"domain":null},"campaign.edit":{"uri":"campaign\/{campaign}\/edit","methods":["GET","HEAD"],"domain":null},"campaign.update":{"uri":"campaign\/{campaign}","methods":["PUT","PATCH"],"domain":null},"campaign.destroy":{"uri":"campaign\/{campaign}","methods":["DELETE"],"domain":null},"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"register":{"uri":"register","methods":["GET","HEAD"],"domain":null},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"],"domain":null},"password.email":{"uri":"password\/email","methods":["POST"],"domain":null},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"],"domain":null},"password.update":{"uri":"password\/reset","methods":["POST"],"domain":null},"verification.notice":{"uri":"email\/verify","methods":["GET","HEAD"],"domain":null},"verification.verify":{"uri":"email\/verify\/{id}","methods":["GET","HEAD"],"domain":null},"verification.resend":{"uri":"email\/resend","methods":["GET","HEAD"],"domain":null},"home":{"uri":"home","methods":["GET","HEAD"],"domain":null}},
	baseUrl: 'http://localhost/',
	baseProtocol: 'http',
	baseDomain: 'localhost',
	basePort: false,
	defaultParameters: []
};

if (typeof window.Ziggy !== 'undefined') {
	for (var name in window.Ziggy.namedRoutes) {
		Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
	}
}

export {
	Ziggy
}
