<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adresowanie IP</title>
</head>

<body>
<div id="container">
    <h4>Adresowanie IP</h4>
    <label for="ip">IP</label>
    <input type="text" id="ip" name="ip"></br>
    <label for="mask">Maska</label>
    <input type="text" id="mask" name="mask"></br>
    <input type="button" id="btn" name="btn" value="Oblicz" onclick="oblicz();">

    <h4 id="as">Adres sieci: </h4>
    <h4 id="broadcast">Adres rozgloszeniowy: </h4>
    <h4 id="firstHost">Pierwszy host: </h4>
    <h4 id="lastHost">Ostatni host: </h4>
    <h4 id="hostCount">Liczba hostów w sieci: </h4>
    <h4 id="allHosts">Wszystkie hosty w sieci: </h4>
</div>

<script>
    function oblicz() {
        var ip = document.getElementById('ip').value;
        const octets = ip.split('.');
        var octet1 = parseInt(octets[0]);
        var octet2 = parseInt(octets[1]);
        var octet3 = parseInt(octets[2]);
        var octet4 = parseInt(octets[3]);

        var mask = document.getElementById('mask').value;
        const masks = mask.split('.');
        var mask1 = parseInt(masks[0]);
        var mask2 = parseInt(masks[1]);
        var mask3 = parseInt(masks[2]);
        var mask4 = parseInt(masks[3]);

        var networkAddress = "";
        var broadcastAddress = "";
        var firstHost = "";
        var lastHost = "";
        var hostCount = 0;

        networkAddress = networkAddress.concat(octet1 & mask1, ".", octet2 & mask2, ".", octet3 & mask3, ".", octet4 & mask4);
        broadcastAddress = broadcastAddress.concat((octet1 & mask1) | (~mask1 & 255), ".", (octet2 & mask2) | (~mask2 & 255), ".", (octet3 & mask3) | (~mask3 & 255), ".", (octet4 & mask4) | (~mask4 & 255));

        firstHost = networkAddress.substring(0, networkAddress.lastIndexOf('.')) + '.' + (parseInt(networkAddress.substr(networkAddress.lastIndexOf('.') + 1)) + 1);

        lastHost = broadcastAddress.substring(0, broadcastAddress.lastIndexOf('.')) + '.' + (parseInt(broadcastAddress.substr(broadcastAddress.lastIndexOf('.') + 1)) - 1);

        var numberOfZeros = (mask1.toString(2).split("0").join("").length +
                            mask2.toString(2).split("0").join("").length +
                            mask3.toString(2).split("0").join("").length +
                            mask4.toString(2).split("0").join("").length);
        hostCount = Math.pow(2, (32 - numberOfZeros)) - 2;

        var allHosts = "";
        for (var i = 1; i <= hostCount; i++) {
            var nextHost = dodajjeden(networkAddress);
            allHosts += nextHost + '<br>';
            networkAddress = nextHost;
        }

        document.getElementById('as').innerHTML = "Adres sieci: " + networkAddress;
        document.getElementById('broadcast').innerHTML = "Adres rozgloszeniowy: " + broadcastAddress;
        document.getElementById('firstHost').innerHTML = "Pierwszy host: " + firstHost;
        document.getElementById('lastHost').innerHTML = "Ostatni host: " + lastHost;
        document.getElementById('hostCount').innerHTML = "Liczba hostów w sieci: " + hostCount;
        document.getElementById('allHosts').innerHTML = "Wszystkie hosty w sieci: <br>" + allHosts;
    }

    function dodajjeden(ip) {
        var octets = ip.split('.');
        var octet4 = parseInt(octets[3]);

        if (octet4 < 255) {
            octets[3] = octet4 + 1;
        } else {
            octets[3] = 0;
            var octet3 = parseInt(octets[2]);
            if (octet3 < 255) {
                octets[2] = octet3 + 1;
            } else {
                octets[2] = 0;
                var octet2 = parseInt(octets[1]);
                if (octet2 < 255) {
                    octets[1] = octet2 + 1;
                } else {
                    octets[1] = 0;
                    var octet1 = parseInt(octets[0]);
                    if (octet1 < 255) {
                        octets[0] = octet1 + 1;
                    }
                }
            }
        }

        return octets.join('.');
    }
</script>

</body>
</html>
