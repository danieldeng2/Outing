# run "chmod +x fixPermissioins.sh" first.
chmod a+x ~
chmod a+x ~/public_html

find ~/public_html -type d -exec chmod 755 {} \;
find ~/public_html -type f -exec chmod 644 {} \;
find ~/public_html -iname "*.php" | xargs chmod +x