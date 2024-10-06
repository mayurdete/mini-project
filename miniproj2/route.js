// Admin Login Route
router.post('/admin-login', async (req, res) => {
    const { adminUsername, adminPassword } = req.body;
    // Example admin credentials check, replace with your own logic
    if (adminUsername === 'admin' && adminPassword === 'admin123') {
        const token = jwt.sign({ role: 'admin' }, process.env.JWT_SECRET, { expiresIn: '1h' });
        return res.json({ token });
    }
    return res.status(400).send('Invalid admin credentials');
});

// Forgot Password Route
router.post('/forgot-password', async (req, res) => {
    const { username } = req.body;
    // Here, implement your password reset logic (e.g., sending an email)
    // For example, you can generate a reset token and send it via email
    res.send(`Password reset link sent to the email associated with ${username}`);
});
