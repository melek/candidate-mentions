<!DOCTYPE html>
<html>
    <head>
        <title>
            Candidate Mentions
        </title>
        <link rel="stylesheet" href="https://unpkg.com/normalize.css@8.0.1/" type="text/css">
        <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
    </head>
    <body>
        <article>
            <h1>Candidate Media Mentions</h1>
            <p><?php
                if (!defined('PDO::ATTR_DRIVER_NAME')) {
                    echo 'PDO unavailable';
                    }
                else {
                    echo 'PDO Available!'
                }
            ?></p>
            <p>Curious how your candidate is doing in terms of earned media? Here is how they are faring on America's <a href="https://www.journalism.org/2020/01/24/u-s-media-polarization-and-the-2020-election-a-nation-divided/">most watched & trusted news outlets</a>.</p>
            <table>
                <thead>
                    <tr>
                        <th>Candidate</th>
                        <th>Keyword(s)</th>
                        <th>ABC</th>
                        <th>CBS</th>
                        <th>NBC</th>
                        <th>NYT</th>
                        <th>NPR</th>
                        <th>PBS</th>
                        <th>FOX</th>
                    </tr>
                </thead>                
                <tbody>
                    <tr>
                        <td>Joe Biden</td>
                        <td>Biden</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </article>
    </body>
</html>
