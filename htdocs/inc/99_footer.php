    <script src="/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="/js-web3/web3.js"></script>
    <script type="text/javascript" src="/js-web3/web3modal.js"></script>
    <script type="text/javascript" src="/js-web3/evm-chains.js"></script>

    <script type="text/javascript" src="/js-web3/wallet-connect.js"></script>
    <script type="text/javascript" src="/js-web3/ethers-5.0.umd.min.js"></script>
    <script type="text/javascript" src="/js-web3/bignumber.min.js"></script>



<?php
//print "<button class=\"btn btn-primary\" onclick=\"screenshots();\">Screenshot</button>";
print "<script>";
print "
var glob = new Array();
glob[\"site_version\"] = '$site_version';
glob[\"title\"] = 'AIRDROP HUNTER';
glob[\"domen\"] = '$site';
glob[\"item\"] = '$item';
glob[\"need_white_list\"] = '$need_white_list';
";
$f = "/update_time";
$t = @filemtime($f);
print "glob[\"update_time\"] = '".date("Y-m-d H:i:s",$t)."';";
print "
glob[\"contracts\"] = new Array();
//glob[\"contracts\"][\"ref_register\"] = '".$contract_mas[matic][ref_register]."';
";
reset($contract_mas);
foreach($contract_mas as $k2=>$v2)
{
    foreach($v2 as $k=>$v2)
    {
	print "glob[\"contracts\"][\"".$k2."_".$k."\"] = \"$v2\";\n";
    }
}
print "</script>";
$f = "script.js";
$t = $www_dir;
$t .= "js/";
$t .= $f;
$a = filemtime($t);
print "<script src=\"/js/script.js?$a\"></script>";
//print "<script src=/js2/abi/".($js_debug?"?".time():"")."></script>";
print "<script src=/js2/".($js_debug?"?".time():"")."></script>";

?>

    <script>
        const NETWORK_PARAMS = {
            "0x1": {
                chainId: "0x1",
                chainName: "Ethereum Mainnet",
                rpcUrls: ['https://bsc.publicnode.com'],
                nativeCurrency: {
                    name: 'Ethereum',
                    symbol: 'ETH',
                    decimals: 18
                },
                blockExplorerUrls: ['https://etherscan.io/'],
            },
            "0x38": {
                chainId: "0x38",
                chainName: "BNB Smart Chain Mainnet",
                rpcUrls: ['https://eth.publicnode.com'],
                nativeCurrency: {
                    name: 'BNB',
                    symbol: 'BNB',
                    decimals: 18
                },
                blockExplorerUrls: ['https://bscscan.com/'],
            },
            "0x89": {
                chainId: "0x89",
                chainName: "Polygon Mainnet",
                rpcUrls: ['https://polygon-rpc.com'],
                nativeCurrency: {
                    name: 'MATIC',
                    symbol: 'MATIC',
                    decimals: 18
                },
                blockExplorerUrls: ['https://polygonscan.com/'],
            },
        };

      //listen for a `click` to connect when clicking the button
      window.addEventListener('load', async () => {
          await checkConnection();
      });

      document.getElementById('connectButton').addEventListener('click', async () => {
          await connectWallet();
      });

      const connectWallet = async () => {
        if (window.ethereum) {
            await window.ethereum.request({method: 'eth_requestAccounts'});
            await updateWalletData();

            // toggle visibility of connection block
            let authOff = document.querySelectorAll('.auth_off');
            if (authOff.length) {
                for (let item of authOff)  item.classList.toggle('d-none')
            }

            // toggle visibility of connected wallet block
            let authOn = document.querySelectorAll('.auth_on');
            if (authOn.length) {
                for (let item of authOn) item.classList.toggle('d-none')
            }
        }
      };

      const activateSelectedNetwork = (chainId) => {
          let netParentLinks = document.querySelectorAll('.networks-link');
          let netLinks = document.querySelectorAll('.networks-link .networks__link');
          let active = document.querySelector('.networks__active');
          active.classList.remove('notavailable');
          for (let i=0; i<netParentLinks.length;i++) {
              netParentLinks[i].classList.remove('active');
          }
          for (let i=0; i<netLinks.length;i++) {
              if (chainId == netLinks[i].dataset.chainId) {
                  let activeHTML = netLinks[i].innerHTML;
                  let btn = document.querySelector('.networks__btn');
                  btn.innerHTML = activeHTML;
                  let parentEl = netLinks[i].closest('.networks-link');
                  parentEl.classList.add('active');
              }
          }
      };

      const checkConnection = async () =>  {
          if (window.ethereum) {
              let accounts = await window.ethereum.request({ method: 'eth_accounts' });
              if (accounts.length == 0) return;
              await connectWallet();
        } else {
          // Alert the user to download Metamask
          alert('Please download Metamask');
        }
      };

      const updateWalletData = async () => {
          if (window.ethereum) {
              //access_balance
              const accounts = await window.ethereum.request({method: 'eth_accounts'});
              let chainId = await window.ethereum.request({method: 'eth_chainId'});
              let currentCurrency = changeCurrency(chainId);
                activateSelectedNetwork(chainId);
              const web3 = new Web3(window.ethereum);
              await web3.eth.getBalance(accounts[0]).then(balance => {
                  let etherBalance = web3.utils.fromWei(balance);
                  let etherBalanceFixed = Number(etherBalance).toFixed(4);
                  let accessBalance = document.querySelectorAll('.access_balance');
                  if (accessBalance.length) {
                      for (let item of accessBalance) {
                          item.innerHTML = etherBalanceFixed;
                          item.setAttribute('title', `${etherBalance} ${currentCurrency}`);
                      }
                  }
              });

              // Display the connected account
              let walletId = document.querySelectorAll('.wallet-id');
              if (walletId.length) {
                  for (let walletId_item of walletId) {
                      walletId_item.innerText = accounts[0];
                  }
              }
          }
      };

        const changeNetwork = async (chainId) => {
          if (window.ethereum) {
                try {
                    await window.ethereum.request({
                        method: 'wallet_switchEthereumChain',
                        params: [{ chainId: chainId }],
                    });
                    await updateWalletData();
                    return true;
                } catch (error) {
                    console.error(error);
                    await addNetwork(chainId);
                    return false;
                }
                return false;
            }
        };

        const addNetwork = async (chainId) => {
          if (window.ethereum) {
                try {
                    await window.ethereum.request({
                        method: 'wallet_addEthereumChain',
                        params: [NETWORK_PARAMS[chainId]],
                    });
                    await updateWalletData();
                    return true;
                } catch (error) {
                    console.error(error);
                    alert(error.message);
                }
            }
        };

        const changeCurrency = (chainId) => {
            let currencySymbol = NETWORK_PARAMS[chainId].nativeCurrency.symbol;
            let currencyWrapper = document.getElementById('currency_network');
            currencyWrapper.innerHTML = ` ${currencySymbol}`;
            return currencySymbol;
        };

    </script>

</body>
</html>